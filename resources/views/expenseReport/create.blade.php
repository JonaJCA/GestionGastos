@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>NUEVOS REPORTES</h1>
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
            <form action="{{ route('expense_reports.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="ingresar titulo" value="{{ old('title')}}">
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
                
        </div>
    </div>
@endsection