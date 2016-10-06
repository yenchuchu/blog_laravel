 @extends('layouts.default')

@section('content') 
<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb">
            <li><a href= "{{route('roles.index')}}">List Roles</a> <span class="divider"></span></li>
            <li class="active">Edit</li>
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
                    {!! Form::open(array('method' => 'PATCH', 'route' => array('roles.update', $roles->id))) !!}
                    	<div class="row-form">
                            <div class="span3">Role Name:</div>
                            <div class="span9">
                                <input type="text" placeholder="some text value..."
                                        value="{{$roles->name}}" name="edit-name" /></div>
                            <div class="clear"></div>
                        </div>                  
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Update</button>
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