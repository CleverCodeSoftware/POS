@extends('admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h4 class="mb-3">Editar categoria: {{$categoria->nombre}}</h4>
                                <p class="mb-0">Edicion de categoria</p>
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
                            {!!Form::model($categoria,['method'=>'PATCH','route'=>['inventario.categoria.update',$categoria->idcategoria]])!!}
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}" placeholder="Nombre...">                            
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}"placeholder="Descripcion...">                            
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