@extends('default')

@section('content')

    <h1 class="page-heading">Confirm</h1>

    {!! Form::open(['action' => 'NoticesController@store']) !!}

        <div class="form-group">
            {!! Form::label('template', 'Template:') !!}
            {!! Form::textarea('template', $template, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Deliver DMCA Notice Now', ['class' => 'form-control btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@stop