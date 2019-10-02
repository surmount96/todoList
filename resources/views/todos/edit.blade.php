@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>
    <a class="btn btn-default" href="/todo/{{$todo->id}}">go back</a>
    {!! Form::open(['action' => ['TodosController@update',$todo->id], 'method' => 'POST']) !!}
        
        {{ Form::bsText('text',$todo->text) }}
        {{ Form::bsTextarea('body',$todo->body) }}
        {{ Form::bsText('due',$todo->due) }}
        {{ Form::hidden('_method','PUT') }}
        {{ Form::bsSubmit('submit',['class' => 'btn btn-primary'])  }}
        
    {!! Form::close() !!}

@endsection

