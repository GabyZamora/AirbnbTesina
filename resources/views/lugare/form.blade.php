<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreLugar') }}
            {{ Form::text('nombreLugar', $lugare->nombreLugar, ['class' => 'form-control' . ($errors->has('nombreLugar') ? ' is-invalid' : ''), 'placeholder' => 'Nombrelugar']) }}
            {!! $errors->first('nombreLugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCategoria') }}
            {{ Form::text('idCategoria', $lugare->idCategoria, ['class' => 'form-control' . ($errors->has('idCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Idcategoria']) }}
            {!! $errors->first('idCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMunicipio') }}
            {{ Form::text('idMunicipio', $lugare->idMunicipio, ['class' => 'form-control' . ($errors->has('idMunicipio') ? ' is-invalid' : ''), 'placeholder' => 'Idmunicipio']) }}
            {!! $errors->first('idMunicipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDepartamento') }}
            {{ Form::text('idDepartamento', $lugare->idDepartamento, ['class' => 'form-control' . ($errors->has('idDepartamento') ? ' is-invalid' : ''), 'placeholder' => 'Iddepartamento']) }}
            {!! $errors->first('idDepartamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('latitud') }}
            {{ Form::text('latitud', $lugare->latitud, ['class' => 'form-control' . ($errors->has('latitud') ? ' is-invalid' : ''), 'placeholder' => 'Latitud']) }}
            {!! $errors->first('latitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('longitud') }}
            {{ Form::text('longitud', $lugare->longitud, ['class' => 'form-control' . ($errors->has('longitud') ? ' is-invalid' : ''), 'placeholder' => 'Longitud']) }}
            {!! $errors->first('longitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $lugare->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mascotas') }}
            {{ Form::text('mascotas', $lugare->mascotas, ['class' => 'form-control' . ($errors->has('mascotas') ? ' is-invalid' : ''), 'placeholder' => 'Mascotas']) }}
            {!! $errors->first('mascotas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $lugare->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $lugare->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numHuesped') }}
            {{ Form::text('numHuesped', $lugare->numHuesped, ['class' => 'form-control' . ($errors->has('numHuesped') ? ' is-invalid' : ''), 'placeholder' => 'Numhuesped']) }}
            {!! $errors->first('numHuesped', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>