<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable = [
        'production_id',
        'image',
        'sort_order',
    ];

    public function production(): BelongsTo
    {
        return $this->belongsTo(Production::class);
    }
}
