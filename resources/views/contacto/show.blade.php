@extends('layouts.app')

@section('stylecss')
<style>
.form-control-static {
    font-weight: bold;
}
.img-photo {
    max-width: 100%;
    border: 1px solid #c0c0c0;
    border-radius: 5px;
    margin-bottom: 15px;
}
</style>
@endsection

@section('javascript')
<script type="text/javascript">
function validate_delete() {
    return confirm('Eliminar el registro actual? Esta accion no se puede deshacer.');
}
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contacto</div>
                <form action="{{ url('contactos/'.$data->id) }}" method="post" onsubmit="return validate_delete()">
                    <div class="card-body">
                        @method('DELETE')

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ $data->photo_image }}" class="img-photo">
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nombre">Nombre Completo</label>
                                    <p class="form-control-static">{{ $data->nombre }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <p class="form-control-static">{{ $data->telefono }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="mail">Mail</label>
                                    <p class="form-control-static">{{ $data->mail }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <p class="form-control-static">{{ $data->direccion }}</p>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <a href="{{ url('contactos/edit/'.$data->id) }}" class="btn btn-primary">Editar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
