<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'user_adresses';

    protected $fillable = [
        'address',
        'zip_code',
        'city',
        'state',
    ];
}
