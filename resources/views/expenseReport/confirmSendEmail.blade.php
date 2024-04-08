@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>ENVIAR REPORTE</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="./">Atrás</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="././sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="ingresar correo" value="{{ old('email')}}">
                </div>
                <button class="btn btn-primary" type="submit">Enviar Correo</button>
            </form>
                
        </div>
    </div>
@endsection