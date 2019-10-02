@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary">go back</a>
    {{-- <h1>Todos {{ $todo->id }}</h1> --}}
    <div class="card card-body">
        <h3><a>{{ $todo->text }}</a></h3>
        <div class="label">{{ $todo->due }}</div>
        <p class="lead">{{ $todo->body }}</p>
        <br><br>
    </div>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-secondary">Edit</a>
    
    {!! Form::open(['action' => ['TodosController@destroy',$todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger'])  }}
        
    {!! Form::close() !!}
@endsection