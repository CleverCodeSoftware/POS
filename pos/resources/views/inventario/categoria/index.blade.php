@extends('admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Listado de categorias</h4>
                        <p class="mb-0">Categorias de productos.</p>
                    </div>
                    <a href="categoria/create" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar categoria</a>
            </div>
            @include('inventario.categoria.search')
        </div>    
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($categorias as $cat)
                    <tr>
                        <td>{{$cat->idcategoria}}</td>
                        <td>{{$cat->nombre}}</td>
                        <td>{{$cat->descripcion}}</td>
                        <td>
                        <div class="d-flex align-items-center list-action">
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" href="#" style="margin-right: 10px;"><button type="button" class="mt-2 btn btn-success"><i class="ri-pencil-line"></i>Editar</button></a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" href="#"><button type="button" class="mt-2 btn btn-warning"><i class="ri-delete-bin-line"></i>Eliminar</button></a>
                            <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="ri-eye-line mr-0"></i></a> -->
                            <!-- <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i>Editar</a>
                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line mr-0"></i>Eliminar</a> -->
                        </div>                    
                            <!-- <a href=""><button class="btn btn-info">Editar</button></a>
                            <a href=""><button class="btn btn-danger">Eliminar</button></a> -->
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            {{$categorias->render()}}
        </div>
    </div>
<!-- <h3>Index</h3> -->

@stop