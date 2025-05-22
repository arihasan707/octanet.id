<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pencairan extends Model
{
    //
    protected $fillable = [
        'user_id',
        'bank_id',
        'jml_pencairan',
        'status'
    ];

    /**
     * Get the user that owns the Pencairan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user that owns the Pencairan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    /**
     * Get the user that owns the Pencairan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }
}
