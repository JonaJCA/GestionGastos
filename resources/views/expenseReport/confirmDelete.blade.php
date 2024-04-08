@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>ELIMINAR REPORTES {{ $report->id}}</h1>
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
                {{ method_field('delete') }}
                <div class="form-group">
                   
                </div>
                <button class="btn btn-primary" type="submit">Eliminar</button>
            </form>
                
        </div>
    </div>
@endsection