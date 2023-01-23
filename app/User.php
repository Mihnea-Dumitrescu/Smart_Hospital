<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Moloquent\Eloquent\SoftDeletes;
use Moloquent\Auth\User as BaseUser;

class User extends BaseUser
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cnp_cui','address','is_admin','department_id','department','practice',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
