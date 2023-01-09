<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brief;
use App\Models\Groupe;


class Formateur extends Model
{
    use HasFactory;

    public function brief()
    {
        return $this->hasMany(Brief::class);
    }
    public function groupe()
    {
        return $this->hasMany(Groupe::class);
    }
}
