<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bread extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // RELACJA

    public function sandwitches(): HasMany
    {
        return $this->hasMany(Sandwitch::class);
    }
}
