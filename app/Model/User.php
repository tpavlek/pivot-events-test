<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = [ 'username' ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

}
