@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="imagen">
    <img src="{{ asset('images/logo.png') }}" width="90" height="90">
</div>
<div class="container">
    <div class="wrapper">
        <div class="justify-content-center">
            <div class="col-md-8">
                @if( count($errors) >0 )
                    <div class="alert alert-danger">
                        
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" class="form-registro" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="texto-formulario">
                        <h2>Bienvenido</h2>
                        <p>Registrate.</p>
                    </div>
                    <div class="form-row">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" placeholder="Nombre" size="55" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" placeholder="Email" size="55" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" placeholder="Contraseña" size="55" class="form-control @error('password') is-invalid @enderror" name="password">
                        </div>
                    </div>
                    <div class="input">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar Usuario') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection