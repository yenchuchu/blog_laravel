@extends('layouts.default')

@section('content')
 
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb list-acc">
            <li><a href= "{{route('roles.index')}}">List Roles</a> <span class="divider"></span></li>
            <li class="active">Add</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Roles Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    {!! Form::open(array('url' => '/roles')) !!}
                    	<div class="row-form">
                            <div class="span3">Role Name:</div>
                            <div class="span9"> 
                                <input type="text" placeholder="some text value..." 
                                       name="role" required/></div>
                            <div class="clear"></div>
                        </div>  
                         <div class="row-form">
                             {{ Form::submit('Create', ['class'=>'btn btn-success']) }} 
                            <div class="clear"></div>
                        </div>
                    {!! Form::close() !!} 
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>
@endsection