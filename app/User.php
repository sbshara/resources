<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

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

    public function setting()
    {
        return [
            'skin'      =>  'skin-blue',
            'sidebar'   =>  'sidebar-mini'
        ];
    }

    public function fullName()
    {
        return $this->name;
    }

    public function title()
    {
        return 'Developer';
    }

    public function joined()
    {
        return Carbon::parse($this->created_at)->format('M Y');
    }

    public function online()
    {
        return true;
    }


}
