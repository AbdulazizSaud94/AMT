<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'title'
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
        return $this->belongsToMany('App\Role', 'user_role');
    }

    public function hasAnyRole($roles)
    {
        foreach ($roles as $role)
            if ($this->hasRole($role))
                return true;
        return false;
    }

    public function hasRole($role)
    {
        $get_role = $this->roles()->where('name', $role)->first();
        if ($get_role)
            return true;
        else
            return false;
    }

    public function addRole($role)
    {
        if (!$this->hasRole($role)) {
            $get_role = Role::where('name', $role)->first();
            $this->roles()->attach($get_role);
        }
    }

    public function addRoles($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role)
                $this->addRole($role);
        }
    }

    public function removeRole($role)
    {
        if ($this->hasRole($role)) {
            $get_role = Role::where('name', $role)->first();
            $this->roles()->detach($get_role);
        }
    }

    public function removeRoles($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                $this->removeRole($role);
            }
        }
    }

    public function addOnlyRoles($roles)
    {
        if (is_array($roles)) {
            $this->roles()->detach();
            $this->addRoles($roles);
        }
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function rfqs()
    {
        return $this->hasMany('App\Rfq');
    }
}
