<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
 
use App\User; 

use App\Role;

use App\UserRole;

class UserController extends Controller
{  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $user = Auth::user();
        $auth_id = $user->id; 
        $users = DB::table('users')->get(); 
        $roles = DB::table('roles')->get();
        $roles_chosen = UserRole::getRolesUser(8);
         
        return view('users/index', ['users' => $users, 
                    'roles' => $roles, 
                    'roles_chosen' => $roles_chosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->get();

        return view('users/add', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users_request = $request->all(); 
        $user = Auth::user();
        

        $user = new user();
        $user->name = $users_request['add-name']; 
        $user->email = $users_request['add-email']; 

        $user->save(); 

        return redirect('/users');
    }
 
    public function getAdd($id)
    {
        $roles = DB::table('roles')->get(); 
        $user_roles = UserRole::getRolesUser($id);
var_dump($user_roles);die;
        return view('users.addRoles', ['roles' => $roles, 
                                        'roles_selected' => $user_roles,
                                        'user_id' => $id ]);
    }

    public function add(Request $request)
    {
        $roles_request = $request->all();
        $user_id  = $roles_request['own-user'];
        $roles_choose = $roles_request['users'];
        foreach ($roles_choose as $item) {
            $user =User::find($user_id);
            $user->roles()->attach($item); 
        } 
        
       return redirect('/users'); 
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        return view('users.edit', ['users' => user::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users_request = $request->all();
        $name = $users_request['edit-name'];
        $email = $users_request['edit-email'];
        $user = Auth::user();
         
         $product = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'name' => $name,
                        'email' => $email,
                        'updated_at' => Carbon::now()
                    ]);

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
 
        return redirect('/users');

        // $this->request->allowMethod('post');

        // $id = $this->request->data['id'];
        // $user = User::find($id);
        // if ($user->delete() === true) {
        //     echo json_encode(['status' => 0, 'message' => 'OK']);
        //     exit;
        // }
        // echo json_encode(['status' => 1, 'message' => 'Save not success']);
        // exit; 
    }


}
