<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Formateur;
use App\Models\AnnéeFormation;
// use App\Models\AnnéeFormation;
class GroupeController extends Controller
{
    public function index()
    {
        $select_groupe = Groupe::all();
        foreach($select_groupe as $année) {
            $année->anneeFormation;
        }
        foreach($select_groupe as $année)
        {
            $année->formateur;
        }
        // return $select_groupe;
        return view('groupeIndex' , compact('select_groupe'));
    }

    public function insert_page()
    {
        $select_formateur = Formateur::all();
        $select_annéeformation = AnnéeFormation::all();
        // return $select_annéeformation;
        return view('addGroupe', compact('select_formateur', 'select_annéeformation'));
    }


    public function insert(Request $request)
    {
        $insert_groupe = new Groupe();
        $insert_groupe->nom = $request->name;
        $insert_groupe->name = $request->name;
        $insert_groupe->name = $request->name;
    }
}
