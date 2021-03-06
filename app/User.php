<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','image'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
    protected $hidden = ['password', 'remember_token'];

      public function roles()
    {
        return $this->belongsToMany('App\roles');
    }
    public function assignRoles($role)
    {
        return $this->roles()->attach($role);
    }
    public function hasRole($name)
    {
        // return $this->roles->contains('name',$name);
        # code...
        foreach ($this->roles as $role) {
            # code...
            if($role->name == $name){
                return true;
            }
        }
        return false;
    }
    public function showRoles()
    {
        # code...
        foreach ($this->roles as $role ) {
            # code...
            
            return $role->name;
        }
    }
}
