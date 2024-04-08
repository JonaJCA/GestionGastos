@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>REPORTES</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="expense_reports/create">Nuevo Reporte</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            
                <table class="table">
                    @foreach($expReports as $expenseReport)
                        <tr>
                            <td><a href="./expense_reports/{{ $expenseReport->id}}">{{ $expenseReport -> title}}</a></td>
                            <td><a href="./expense_reports/{{ $expenseReport->id}}/edit">Editar</a></td>
                            <td><a href="./expense_reports/{{ $expenseReport->id}}/confirmDelete">Eliminar</a></td>
                        </tr>
                    @endforeach
                </table> 
        </div>
    </div>
@endsection