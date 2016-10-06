@extends('layouts.default')

@section('content')
 
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb list-acc">
            <li><a href= "{{route('users.index')}}">List Users</a> <span class="divider"></span></li>
            <li class="active">Add</li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    {!! Form::open(array('url' => '/users')) !!}
                        <div class="row-form">
                            <div class="span3">User Name:</div>
                            <div class="span9"> 
                                <input type="text" placeholder="some text value..." 
                                       name="add-name" required/></div>
                            <div class="clear"></div>
                        </div>  
                        <div class="row-form">
                            <div class="span3">Email:</div>
                            <div class="span9"> 
                                <input type="email" id="add-email" placeholder="some text value..." 
                                       name="add-email" required/></div>
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