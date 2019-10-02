@extends('layouts.app')

@section('content')
    @include('inc.messages')
    <h1>Todos</h1>

    @if(count($todos) > 0)
        <div class="card card-body">
            @foreach ($todos as $todo)
                <h3><a href="todo/{{ $todo->id }}">{{ $todo->text }}</a> <span class="label label-danger">{{ $todo->due }}</span></h3>
            @endforeach
        </div>
    @endif
@endsection

