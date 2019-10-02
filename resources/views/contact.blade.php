{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class' => '', 'plcaeholder' =>''])}}
    </div>
{!! Form::close() !!}