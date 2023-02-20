<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sandwitch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bread_id', // belongsTo
        'price'
    ];

    // RELACJE

    // belongsTo
    // Sandwitch -> belongsTo -> Bread
    // $this->belongsTo(Bread::class);
    // 1:N

    public function bread(): BelongsTo
    {
        return $this->belongsTo(Bread::class);
    }

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot(['extra_spicy'])
            ->as('customData')
            ->withTimestamps();
    }

}
