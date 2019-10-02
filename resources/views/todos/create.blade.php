@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>

    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{-- <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class' => 'form-control', 'placeholder' =>'Enter name'])}}
        </div> --}}

        {{ Form::bsText('text') }}
        {{ Form::bsTextarea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('submit',['class' => 'btn btn-primary'])  }}
        
    {!! Form::close() !!}

@endsection

