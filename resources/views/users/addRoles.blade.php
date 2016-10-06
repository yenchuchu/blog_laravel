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
                    <h1>Add Roles Users</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    {!! Form::open(array('url' => '/users/add/item')) !!} 
                        <div class="row-form">
                            <input type="hidden" value="{{$user_id}}" name="own-user">
                            <div class="container-roles"> 
                                @foreach($roles_selected as $roles_select)
                                    <?php $roles_array[] = $roles_select->role_id; ?>
                                @endforeach  

                                @foreach($roles as $role) 
                                    <div class="left-roles">
                                        <input type="checkbox" name="users[]" value="{{ $role->id }}" 
                                               id="role_id_{{ $role->id }}"
                                               <?php if(!empty($roles_array)) {if(in_array($role->id, $roles_array)) { echo "checked disabled title='checked'"; }}  ?> > 
                                        <label for="role_id_{{ $role->id }}" <?php if(!empty($roles_array)) {if(in_array($role->id, $roles_array)) { echo "title='checked'"; }}  ?>>{{ $role->name }}</label> 
                                    </div>
                                @endforeach 
                            </div>
                        </div>  
                         <div class="row-form">
                             {{ Form::submit('Save', ['class'=>'btn btn-success']) }} 
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