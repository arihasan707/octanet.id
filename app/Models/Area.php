<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'nama',
        'kode_pos',
        'komisi_per_area'
    ];
}