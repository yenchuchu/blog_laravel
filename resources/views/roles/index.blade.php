@extends('layouts.default') 

@section('content')

<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb list-acc"> 
            <li><a href= "{{route('roles.index')}}">List Roles</a> </li>
        </ul>

    </div>

    <div class="workplace">

        <div class="row-fluid">
            <div class="span12 search">
                <form>
                    <input type="text" class="span11" placeholder="Some text for search..." name="search"/>
                    <button class="btn span1 btn-search" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Roles Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                <a href= "{{route('roles.create')}}" class="btn btn-add">Add Role</a> 
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th width="5%"><input type="checkbox" id="checkAll"/></th>
                            <th width="5%" class="sorting"><a href="#">ID</a></th>
                            <th width="20%" class="sorting"><a href="#">name</a></th> 
                            <th width="15%" class="sorting"><a href="#">Time Created</a></th>
                            <th width="15%" class="sorting"><a href="#">Time Updated</a></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                        <tr> 
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td> 
                            <td>{{ $role->created_at }}</td>
                            <td>{{ $role->updated_at }}</td>
                            <td>
                                <a href= "roles/{{$role->id}}/edit" class="btn btn-info btn-edit">Edit</a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'class'=>'btn-delete']) !!}
                                <!-- <a href= "roles/{{$role->id}}" class="btn btn-info">Delete</a> -->
                                <button type="submit" class="btn btn-info">Delete</button>
                                {!! Form::close() !!}
                            </td>
                        </tr> 
                        @endforeach
                        </tbody>
                    </table> 
                    <div class="dataTables_paginate">
                        <a class="first paginate_button paginate_button_disabled" href="#">First</a>
                        <a class="previous paginate_button paginate_button_disabled" href="#">Previous</a>
                        <span>
                            <a class="paginate_active" href="#">1</a>
                            <a class="paginate_button" href="#">2</a>
                        </span>
                        <a class="next paginate_button" href="#">Next</a>
                        <a class="last paginate_button" href="#">Last</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>

</div>
@endsection