<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fullName()
    {
        return $this->name;
    }

    public function settings()
    {
        return 'skin-blue sidebar-mini';
    }

    public function title()
    {
        return 'Developer';
    }

    public function online()
    {
        return true;
    }

    public function joined()
    {
        return \Carbon\Carbon::parse(date('2011-07-02'))->format('M Y');
    }

    public function image()
    {
        return url('vendor/LaraAdminLTE/img/people/shiblie.jpg');
        // return url('vendor/LaraAdminLTE/img/neutral.jpg');  // default
    }









}
