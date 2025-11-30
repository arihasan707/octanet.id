<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agen extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'alamat',
        'rt',
        'rw',
        'kd_pos',
    ];

    /**
     * Get all of the comments for the Agen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Get all of the comments for the Agen
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function Komisis(): HasMany
    // {
    //     return $this->hasMany(Komisi::class, 'foreign_key', 'local_key');
    // }
}
