<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class homeUser extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'password',
    ];
    protected $guarded = ['remember_token'];
    public $timestamps = false;

    protected $table = 'user';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password','remember_token',
//    ];

    public function setPassworddAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
