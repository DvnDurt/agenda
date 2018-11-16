@extends('layouts.app')

@section('stylecss')
<style media="screen">
    .img-photo-xs {
        width: 30px;
        height: 30px;
        border: 1px solid #c0c0c0;
        border-radius: 5px;
    }
    .a-line {
        line-height: 30px;
    }
</style>

@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Contactos
            <a href="{{ url('contactos/add') }}" class="btn btn-primary btn-sm float-right">Nuevo</a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($contactos as $contacto)
                        <tr>
                            <td>
                                <a href="{{ url('contactos/'.$contacto->id) }}">
                                    <img src="{{ $contacto->photo_image }}" class="img-photo-xs">
                                </a>
                            </td>
                            <td><a class='a-line' href="{{ url('contactos/'.$contacto->id) }}">{{ $contacto->nombre }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contactos/'.$contacto->id) }}">{{ $contacto->telefono }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contactos/'.$contacto->id) }}">{{ $contacto->direccion }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contactos/'.$contacto->id) }}">{{ $contacto->mail }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection