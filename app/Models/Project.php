<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    public function Todos(): HasMany{
        return $this->hasMany(Todo::class);
    }

    public function User(): HasMany{
        return $this->hasMany(User::class);
    }
}
