@extends('admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">Editar producto: {{$producto->nombre}}</h4>
                                <p class="mb-0">Edicion de producto</p>
                            </div>
                            @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <ul> 
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif
                    </div>
                </div>       
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {!!Form::model($producto,['method'=>'PATCH','route'=>['inventario.producto.update',$producto->idproducto],'files'=>'true'])!!}
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" required value="{{$producto->nombre}}" class="form-control">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="idcategoria">Categoria</label>
                                        <select name="idcategoria" class="form-control">
                                            @foreach ($categorias as $cat)
                                                @if($cat->idcategoria==$producto->idcategoria)
                                                    <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
                                                @else
                                                    <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
                                                @endif
                                            @endforeach
                                        </select>                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="codigo">Codigo</label>
                                        <input type="text" name="codigo" required value="{{$producto->codigo}}" class="form-control" >                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="stock_total">Stock</label>
                                        <input type="number" name="stock_total" required value="{{$producto->stock_total}}" class="form-control">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="imagen">Imagen</label>
                                        <div class="input-group input-group-lg">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="imagen" id="imagen" data-browse="Buscar">
                                                <label class="custom-file-label" for="imagen" data-browse="Buscar">Escoger imagen</label>
                                               
                                            </div>
                                         </div>                           
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        <button class="btn btn-danger" type="reset">Cancelar</button>
                                    </div>
                                </div>
                                @if(($producto->imagen)!='')
                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                        <div class="card text-white bg-primary">
                                            <div class="card-body">                                            
                                                <img src="{{asset('imagenes/productos/'.$producto->imagen)}}" alt="" class="img-fluid rounded" 
                                                style="display: block;margin-left: auto;margin-right: auto;"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                      
@stop