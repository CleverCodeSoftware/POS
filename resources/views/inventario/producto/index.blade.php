@extends('admin')
@section('contenido')
    <div class="row">
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">  
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">Listado de productos</h4>
                                <p class="mb-0">Productos activos</p>
                            </div>
                            <a href="producto/create" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar producto</a>
                    </div>
                    @include('inventario.producto.search')
                </div>    
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Codigo</th>
                                    <th>Categoria</th>
                                    <th>Stock</th>
                                    <th>Imagen</th>
                                    <th>Estado</th>
                                    <th>Descripcion</th>
                                    <th>Opciones</th>
                                </thead>
                                @foreach ($productos as $prod)
                                <tr>
                                    <td>{{$prod->idproducto}}</td>
                                    <td>{{$prod->nombre}}</td>
                                    <td>{{$prod->codigo}}</td>
                                    <td>{{$prod->categoria}}</td>
                                    <td>{{$prod->stock_total}}</td>
                                    <td><img src="{{asset('imagenes/productos/'.$prod->imagen)}}" alt="{{$prod->nombre}}" height="100px" width="100px" class="img-thumbnail"></td>
                                    <td>{{$prod->estado}}</td>
                                    <td>{{$prod->descripcion}}</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" href="{{URL::action('App\Http\Controllers\ProductoController@edit', $prod->idproducto)}}" style="margin-right: 10px;"><button type="button" class="mt-2 btn btn-success"><i class="ri-pencil-line"></i>Editar</button></a>
                                            <a data-placement="top" title="" data-original-title="Eliminar" href="" data-target="#modal-delete-{{$prod->idproducto}}" data-toggle="modal"><button type="button" class="mt-2 btn btn-warning" ><i class="ri-delete-bin-line"></i>Eliminar</button></a>
                                        </div>                    
                                    </td>
                                </tr>
                                @include('inventario.producto.modal')
                                @endforeach
                            </table>
                        </div>
                        {{$productos->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <h3>Index</h3> -->

@stop