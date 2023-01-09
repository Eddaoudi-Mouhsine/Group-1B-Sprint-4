<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnnéeFormation;
use App\Models\Apprenant;
use App\Models\Formateur;

class Groupe extends Model
{
    use HasFactory;

    public function anneeFormation()
    {
        return $this->belongsTo(AnnéeFormation::class, 'anneeformation_id', 'id');
    }

    public function apprenant()
    {
        return $this->hasMany(Apprenant::class);
    }
    public function formateur()
    {
        return $this->hasMany(Formateur::class);
    }
}
