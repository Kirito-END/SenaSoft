@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        <img src="img/logo.png" class="offset-md-5" alt="" width="17%"></br>
                        <p align="center">
                            {{ __('Registrase') }}
                        </p>                    
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror col-md-7 offset-md-3" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombres">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror col-md-7 offset-md-3" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror col-md-7 offset-md-3" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            
                                <input id="password-confirm" type="password" class="form-control col-md-7 offset-md-3" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirmar Contraseña">
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary col-md-7 offset-md-2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
