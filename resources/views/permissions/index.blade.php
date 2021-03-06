@extends('layouts.default') 

@section('content')

<div class="content">


    <div class="breadLine">

        <ul class="breadcrumb list-acc">
            <li><a href="list-users.html">List Users</a></li>
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
                    <a href="add-user.html" class="btn btn-add">Add User</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"/></th>
                            <th width="15%" class="sorting"><a href="#">ID</a></th>
                            <th width="35%" class="sorting"><a href="#">Username</a></th>
                            <th width="20%" class="sorting"><a href="#">Activate</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Created</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Updated</a></th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>1</td>
                            <td>User 1</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>2</td>
                            <td>User 2</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>3</td>
                            <td>User 3</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>4</td>
                            <td>User 4</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>5</td>
                            <td>User 6</td>
                            <td><span class="text-error">Deactivate</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>6</td>
                            <td>User 6</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>7</td>
                            <td>User 7</td>
                            <td><span class="text-error">Deactivate</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>8</td>
                            <td>User 8</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>9</td>
                            <td>User 9</td>
                            <td><span class="text-error">Deactivate</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox"/></td>
                            <td>10</td>
                            <td>User 10</td>
                            <td><span class="text-success">Activated</span></td>
                            <td>15:00 05/10/2014</td>
                            <td>15:00 05/10/2014</td>
                            <td><a href="edit-user.html" class="btn btn-info">Edit</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <a href="#" class="btn btn-success">Activate</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div><!-- /bulk-action-->
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