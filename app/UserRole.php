<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class UserRole extends Model
{
    protected $table = 'user_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'user_id',
    ];

    public static function getRolesUser($user_id)
    {
        $roles = DB::table('user_roles')->select('role_id')->where('user_id',$user_id)->get();
        return $roles;
    }
}
