<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komisi extends Model
{
    protected $fillable = [
        'user_id',
        'client_id',
        'komisi',
        'date',
        'is_aktif',
    ];

    /**
     * Get the user that owns the Komisi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id',);
    }

    /**
     * Get the user that owns the Komisi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
