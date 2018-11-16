@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contacto</div>
                <form action="{{ url('contactos') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" required class="form-control{{$errors->has('nombre') ? ' is-invalid':''}}" value="{{ old('nombre') }}" id="nombre" name="nombre">
                            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" required class="form-control{{$errors->has('telefono') ? ' is-invalid':''}}" value="{{ old('telefono') }}" id="telefono" name="telefono">
                            <div class="invalid-feedback">{{ $errors->first('telefono') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="mail" class="form-control{{$errors->has('mail') ? ' is-invalid':''}}" value="{{ old('mail') }}" id="mail" name="mail" placeholder="mail@ejemplo.com">
                            <div class="invalid-feedback">{{ $errors->first('mail') }}</div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <label for="photo">Imagen</label>
                            <input type="file" class="form-control-file{{$errors->has('photo') ? ' is-invalid':''}}" id="photo" name="photo" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('photo') }}</div>
                            <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <textarea class="form-control" id="direccion" name="direccion" rows="5">{{ old('direccion') }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
