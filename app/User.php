<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model; 

class User extends Authenticatable
{

    protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_roles');
    }

    // public function getNameRoleOfUser($id)
    // {
    //     $roles = DB::table('user_roles')->select('role_id')->where('user_id',$user_id)->get();
    //     return $roles;
    // }
}
