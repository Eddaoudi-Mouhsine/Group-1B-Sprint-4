<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tache;
use App\Models\Brief;

class Apprenant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'tele',
        'address',
        'imageURL'
    ];
    use HasFactory;

    public function task()
    {
        return $this->hasMany(Tache::class);
    }

    public function brief()
    {
        return $this->hasMany(Brief::class);
    }
}
