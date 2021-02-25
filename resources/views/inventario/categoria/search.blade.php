{!! Form::open(array('url'=>'inventario/categoria','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!} 
<div class="form-group col-md-4" style="
    padding-right: 0px;
    float: right;">
    <div class="input-group mb-4">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</div>
{{Form::close()}}