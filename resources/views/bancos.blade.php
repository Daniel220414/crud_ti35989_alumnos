
    
@extends ("plantilla")
@section ("modulo")Bancos @endsection
@section ("contenido")
<form action="{{url('bancos')}}" method="POST">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
     </div>

    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control"  id="telefono" name="telefono" placeholder="Cellphone" aria-label="Cellphone" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form-control" id="sucursar" name="sucursal" placeholder="Sucursal" aria-label="Sucursal" aria-describedby="basic-addon1">
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
<div class="row">
    <div class="col-md-6">
        @if(session()->has('success'))
        <div class="alert alert-success">
            <i class="fa fa-check" aria-hidden="true"></i>
            {{session()->get('success')}}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger">
            <i class="fa fa-window-close" aria-hidden="true"></i>
            {{session()->get('error')}}
        </div>
        @endif        
    </div>
</div>

 <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>sucursal</th> 
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead> 
                    <tbody>
                        @foreach ($bancos as $row)
                        <tr><td>{{$row->nombre}}</td><td>{{$row->telefono}}</td><td>{{$row->codigo}}</td>
                            <td><button class="btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            <td><button class="btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>        
        </div>    
    </div>

@endsection