@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>NUEVOS GASTOS</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="./{{$report->id}}">Atrás</a>
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
            <form action="{{route('expense.store', $report)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="ingresar descripción" value="{{ old('description')}}">
                </div>
                <div class="form-group">
                    <label for="amount">Monto:</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="ingresar monto" value="{{ old('amount')}}">
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
                
        </div>
    </div>
@endsection