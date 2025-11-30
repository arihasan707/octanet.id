<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama',
        'layanan',
        'kecepatan',
        'data_quota',
        'akses_perangkat',
        'alat_wifi',
        'biaya_pasang',
        'harga'
    ];

    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
    
}