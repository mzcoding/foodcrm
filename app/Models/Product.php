<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'price',
        'description',
        'is_vegetarian',
        'is_halal',
        'is_adult',
        'is_active',
    ];

    protected $casts = [
        'is_vegetarian' => 'boolean',
        'is_halal' => 'boolean',
        'is_adult' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Relations

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'category_has_products',
            'product_id',
            'category_id'
        );
    }
}
