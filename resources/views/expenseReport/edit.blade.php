@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>EDITAR REPORTES {{ $report->id}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="./">Atrás</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="../{{$report->id}}" method="POST">
                @csrf
                {{ method_field('put') }}
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="ingresar titulo" value="{{$report->title}}">
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
                
        </div>
    </div>
@endsection