@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>REPORTE: {{ $report->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="./">Atrás</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="./{{$report->id}}/confirmSendEmail">Enviar Email</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Detalles</h3>
            <table class="table">
                    <tr>
                        <td>DESCRIPCIÓN</td>
                        <td>CREADO</td>
                        <td>MONTO</td>
                    </tr>
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{$expense->description}}</td>
                        <td>{{$expense->created_at}}</td>
                        <td>{{$expense->amount}}</td>
                    </tr>
                @endforeach
            </table>
                
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="./{{$report->id}}/expenses/create">Nuevo Reporte</a>
        </div>
    </div>
@endsection