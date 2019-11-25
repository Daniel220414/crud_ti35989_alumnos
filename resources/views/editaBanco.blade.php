@extends ("plantilla")
@section ("modulo")Editar banco @endsection
@section ("contenido")
<form action="{{route("bancos.update",$bancos[0]->id)}}" method="POST" >
    @method('PATCH')
    {{csrf_field()}}
<div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                </div>
                <input required maxlength="25" value="{{$bancos[0]->nombre}}" type="text" class="form-control" placeholder="Username" id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
     </div>

    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                </div>
                <input required maxlength="10" value="{{$bancos[0]->telefono}}" type="text" class="form-control"  id="telefono" name="telefono" placeholder="Cellphone" aria-label="Cellphone" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <input required value="{{$bancos[0]->codigo}}" maxlength="10" type="text" class="form-control" id="sucursar" name="sucursal" placeholder="Sucursal" aria-label="Sucursal" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-floppy-o" aria-hidden="true"></i></span>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</form>
@endsection
