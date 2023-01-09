<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
// use App\Models\AnnéeFormation;
class GroupeController extends Controller
{
    public function index()
    {
        $select_groupe = Groupe::all();
        foreach($select_groupe as $année) {
            $année->anneeFormation;
        }
        // return $select_groupe;
        return view('groupeIndex' , compact('select_groupe'));
    }
}
