<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    /**
     * Get the user that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /**
     * Get all of the comments for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Komisi(): HasMany
    {
        return $this->hasMany(Komisi::class);
    }

    public function Payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Get the user that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
