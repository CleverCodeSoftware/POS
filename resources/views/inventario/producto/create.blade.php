@extends('admin')
@section('contenido')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">Crear producto</h4>
                                <p class="mb-0">Creacion de nuevo producto</p>
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
                            {!!Form::open(array('url'=>'inventario/producto','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="idcategoria">Categoria</label>
                                        <select name="idcategoria" class="form-control">
                                            @foreach ($categorias as $cat)
                                                <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                                            @endforeach
                                        </select>                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="codigo">Codigo</label>
                                        <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Codigo del articulo">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="stock_total">Stock</label>
                                        <input type="number" name="stock_total" required value="{{old('stock')}}" class="form-control" placeholder="Stock del articulo">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Descripcion del articulo">                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="imagen">Imagen</label>
                                        <div class="input-group input-group-lg">
                                            <!-- <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default" for="imagen">Escoger archivo</span>
                                            </div> -->
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="imagen" id="imagen" data-browse="Buscar">
                                                <label class="custom-file-label" for="imagen" data-browse="Buscar">Escoger imagen</label>
                                            </div>
                                            <!-- <input type="file" name="imagen" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> -->
                                        </div>

                                        <!-- <div class="input-group mb-4">
                                            <input type="file" name="imagen" class="form-control-lg custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="imagen">Choose file</label>
                                        </div> -->
                                        <!-- <input type="file" name="imagen" class="form-control">                             -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <button class="btn btn-danger" type="reset">Cancelar</button>
                            </div>
                           
                            {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                      
@stop