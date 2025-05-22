<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'client_id',
        'start_date',
        'end_date',
        'amount',
        'status'
    ];

    public function Client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
