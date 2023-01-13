<?php

namespace App\Imports;

use App\Models\Apprenant;
use Maatwebsite\Excel\Concerns\ToModel;

class importApprenant implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Apprenant([
            'nom' => $row[0],
            'prenom' => $row[1],
            'email' => $row[2],
            'tele' => $row[3],
            'address' => $row[4],
            'imageURL' => $row[5],
        ]);
    }
}
