<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function goods(): HasMany
    {
        return $this->hasMany(Good::class);
    }
}
