<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
user Illuminate\Auth\Authenticable;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticable
{
    //
    use Authenticable;
}
