<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Production extends Model
{
    protected $fillable = [
        'title',
        'director',
        'writer',
        'slug',
        'poster',
        'short_description',
        'description',
        'youtube_url',
        'is_published',
        'genre',
        'medium',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    /**
     * Generate a unique slug for the production.
     */
    public static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }

    public function cast(): HasMany
    {
        return $this->hasMany(ProductionCast::class)->orderBy('sort_order');
    }

    public function gallery(): HasMany
    {
        return $this->hasMany(Gallery::class)->orderBy('sort_order');
    }
}
