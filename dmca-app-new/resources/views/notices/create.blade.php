@extends('default')

@section('content')
    <h1 class="page-heading">Prepare a DMCA Notices</h1>

    {!! Form::open(['method' => 'GET', 'action' => 'NoticesController@confirm']) !!}

    <div class="form-group">
        {!! Form::label('provider_id', 'who are we sending this to?') !!}
        {!! Form::select('provider_id', $providers, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('infringing_title', 'Infringing_tilte') !!}
        {!! Form::text('infringing_title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('infringing_link', 'Infringing_link') !!}
        {!! Form::text('infringing_link', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('original_link', 'Original_link') !!}
        {!! Form::text('original_link', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('original_description', 'Original_description') !!}
        {!! Form::textarea('original_description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Preview Notices',['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    @include('errors.list')
@stop
