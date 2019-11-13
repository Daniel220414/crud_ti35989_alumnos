
    
@extends ("plantilla")
@section ("modulo")Bancos @endsection
@section ("contenido")

<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
 </div>

<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Cellphone" aria-label="Cellphone" aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Code" aria-label="Code" aria-describedby="basic-addon1">
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

@endsection