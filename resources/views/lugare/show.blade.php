@extends('layouts.app')

@section('template_title')
    {{ $lugare->name ?? 'Show Lugare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lugare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugares.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrelugar:</strong>
                            {{ $lugare->nombreLugar }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $lugare->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Idmunicipio:</strong>
                            {{ $lugare->idMunicipio }}
                        </div>
                        <div class="form-group">
                            <strong>Iddepartamento:</strong>
                            {{ $lugare->idDepartamento }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $lugare->latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $lugare->longitud }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $lugare->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Mascotas:</strong>
                            {{ $lugare->mascotas }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $lugare->Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $lugare->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Numhuesped:</strong>
                            {{ $lugare->numHuesped }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
