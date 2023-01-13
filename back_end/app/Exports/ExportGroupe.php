<?php

namespace App\Exports;

use App\Models\Groupe;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportGroupe implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Groupe::select('name','anneeformation_id','formateur_id')->get();
    }
}
