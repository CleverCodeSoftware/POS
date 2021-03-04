<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductoFormRequest;


class ProductoController extends Controller
{
    public function __construct()
    {
        
    }    

    public function index(Request $request){
        if($request){            
            $query=trim($request->get('searchText'));
            $productos=DB::table('producto as prod')
            ->join('categoria as cat','prod.idcategoria','=','cat.idcategoria')
            ->select('prod.idproducto','prod.nombre','prod.codigo','prod.stock_total',
                'cat.nombre as categoria','prod.descripcion','prod.imagen','prod.estado')
            ->where('prod.nombre','LIKE','%'.$query.'%')
            ->where('prod.condicion','=','1')
            ->orderBy('prod.idproducto','desc')
            ->paginate(7);
            return view('inventario.producto.index',['producto'=>$productos,"searchText"=>$query]);
        }
    }

    public function create()
    {
        $categorias=DB::table('categoria')
        ->where('condicion','=','1')
        ->get();
        return view ('inventario.producto.create',['categorias'=>$categorias]);
    }

    public function store(ProductoFormRequest $request){
        $producto=new Producto;
        $producto->idcategoria=$request->get('idcategoria');
        $producto->codigo=$request->get('codigo');
        $producto->nombre=$request->get('nombre');
        $producto->stock_total=$request->get('stock_total');
        $producto->descripcion=$request->get('descripcion');
        $producto->estado='ACTIVO';
        $producto->condicion='1';
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $nombreArchivo =  rand(1,9).'_'.$file->getClientOriginalName();            
            $file->move(public_path().'/imagenes/productos/',$nombreArchivo);
            $producto->imagen=$nombreArchivo;
        }
        $producto->save();
        return Redirect::to('inventario/producto');
    }

    public function show($id){
        return view('inventario.producto.show',['producto'=>Producto::findOrFail($id)]);
    }

    public function edit($id){
        $producto=Producto::findOrFail($id);
        $categorias=DB::table('categoria')
            ->where('condicion','=','1')
            ->get();
        
        return view('inventario.producto.edit',['producto'=>$producto,'categorias'=>$categorias]);
    }

    public function update(ProductoFormRequest $request,$id){
        $producto=Producto::findOrFail($id);
        $producto->idcategoria=$request->get('idcategoria');
        $producto->codigo=$request->get('codigo');
        $producto->nombre=$request->get('nombre');
        $producto->stock_total=$request->get('stock_total');
        $producto->descripcion=$request->get('descripcion');
        $producto->condicion='1';

        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
            $producto->imagen=$file->getClientOriginalName();
        }

        $producto->update();
        return Redirect::to('inventario/producto');
    }

    public function destroy($id){
        $producto=Producto::findOrFail($id);
        $producto->condicion='0';
        $producto->estado='INACTIVO';
        $producto->update();
        return Redirect::to('inventario/producto');
    }

}
