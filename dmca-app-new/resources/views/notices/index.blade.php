@extends('default')

@section('content')

    <h1 class=""page-heading>The Notices</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <th>This Content:</th>
            <th>Accessible Here:</th>
            <th>Is Infringing Upon My Work Here:</th>
            <th>Notices Sent:</th>
            <th>Content Removed:</th>
        </thead>

        <tbody>
            @foreach($notices as $notice)
                <tr>
                    <td>{{ $notice->infringing_title }}</td>
                    <td>{!! link_to($notice->infringing_link) !!}</td>
                    <td>{!! link_to($notice->original_link) !!}</td>
                    <td>{{ $notice->created_at->diffForHumans() }}</td>
                    <td>
                        {!! Form::open(['data-remote', 'method' => 'PATCH', 'url' => 'notices/'.$notice->id]) !!}
                        <div class="form-group">
                            {!! Form::checkbox('content_removed',
                                                $notice->contet_removed,
                                                $notice->content_removed,
                                                ['onclick' => 'remove('.$notice->id.','.$notice->content_removed.')']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @unless(count($notices))
        <p class="text-center">You haven't sent any DMCA notices </p>
    @endunless

@stop