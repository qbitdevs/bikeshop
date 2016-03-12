<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'age', 'avatar', 'email', 'gender', 'is_admin', 'name', 'password' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
