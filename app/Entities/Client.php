<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected  $fillable = array(
        'name',
        'responsible',
        'email',
        'phone',
        'address',
        'obs',
    );
}
