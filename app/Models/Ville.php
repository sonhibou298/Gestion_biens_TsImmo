<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
}
