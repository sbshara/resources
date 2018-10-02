<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public static function bodyTags ()
    {
        return 'hold-transition skin-blue sidebar-mini sidebar-collapse';
    }
}
