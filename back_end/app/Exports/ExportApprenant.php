<?php

namespace App\Exports;

use App\Models\Apprenant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportApprenant implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Apprenant::select('nom', 'prenom', 'email', 'tele', 'address', 'imageURL')->get();
    }
}
