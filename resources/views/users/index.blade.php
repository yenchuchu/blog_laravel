@extends('layouts.default') 

@section('content')

<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb list-acc"> 
            <li><a href= "{{route('users.index')}}">List Users</a> </li>
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
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                <a href= "{{route('users.create')}}" class="btn btn-add">Add User</a>  

                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th width="5%"><input type="checkbox" id="checkAll"/></th>
                            <th width="5%" class="sorting"><a href="#">ID</a></th>
                            <th width="20%" class="sorting"><a href="#">name</a></th>
                            <th width="20%" class="sorting"><a href="#">Email</a></th>
                            <th width="15%" class="sorting"><a href="#">Time Created</a></th>
                            <th width="15%" class="sorting"><a href="#">Time Updated</a></th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody> 

                        <!-- testing -->
                        @foreach($roles_chosen as $role_chosen)
                            <div class="checkbox left-roles">
                                <label>
                                    <input type="checkbox">{{ $role_chosen->role_id }}
                                </label>
                            </div>
                        @endforeach

                        @foreach ($users as $user)
                        <tr> 
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td><span class="text-success">{{ $user->email }}</span></td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <div class="dropdown" style="float: left;">
                                    <button class="btn btn-primary dropdown-toggle" type="button" 
                                            data-toggle="dropdown">Options
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="users/{{$user->id}}/edit" >Edit</a>
                                        </li>
                                        <li>
                                            {!! Form::open(['method' => 'DELETE', 'class'=>'btn-delete', 'id' => 'deletef_'.$user->id]) !!}
                                                <button id="{{$user->id}}" class="btn-delete-down"
                                                        onclick="deleteUser(this.id)">Delete</button> 
                                            {!! Form::close() !!}
                                        </li>
                                        <li>
                                            <a href="users/add/{{$user->id}}" >Add Roles</a>
                                        </li>
                                        <li>

                                            <!-- Trigger the modal with a button -->
                                            <button type="button" class="btn-delete-down" 
                                                    data-toggle="modal" data-target="#myModal">
                                                    View Roles</button> 
                                        </li>
                                    </ul>

                                </div> 
                            </td>
                        </tr> 
                        @endforeach
                        </tbody>
                    </table>  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body container-roles"> 
                <div class="checkbox left-roles">
                    <label><input type="checkbox">aaaaaaa</label>
                </div>
                <div class="checkbox left-roles">
                    <label><input type="checkbox">bbbbbb</label>
                </div>
                <div class="checkbox left-roles">
                    <label><input type="checkbox">ccccccc</label>
                </div>
                <div class="checkbox left-roles">
                    <label><input type="checkbox">ssssssssss</label>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>
                    <div class="dataTables_paginate" style="margin-top: 100px;">
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
<script type="text/javascript"> 
    function deleteUser(id)
    {
        var r = confirm("Are you sure delete this user?");
        if (r == true) {
            $("#deletef_"+ id +"").attr("action", "users/" + id + "");
        } else {
            $("#deletef_"+ id +"").attr("action", ""); ///// ?????????????????????
            return false;
         }
    }
    
</script>
@endsection