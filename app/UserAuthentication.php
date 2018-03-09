<?php namespace App;

use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User;

class UserAuthentication extends User implements Authenticatable, Authorizable, CanResetPassword {

    protected $table = 'user_authentication';

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function register($email, $password) {
        return static::create([
            'email' => $email,
            'password' => \Hash::make($password),
        ]);
    }
}