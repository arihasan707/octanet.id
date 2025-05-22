<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $fillable = [
        'user_id',
        'nama',
        'atas_nama',
        'no_rek'
    ];
}