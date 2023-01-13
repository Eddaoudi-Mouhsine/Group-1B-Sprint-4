<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Formateur;
use App\Models\AnnéeFormation;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportGroupe;
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
        $fille_name = $request->image->getClientOriginalName();
        $file_path = 'upload/' . $fille_name;
        $path = Storage::disk('public')->put($file_path, file_get_contents($request->image));

        $insert_groupe = new Groupe();
        $insert_groupe->name = $request->name;
        $insert_groupe->anneeformation_id  = $request->aneeformation;
        $insert_groupe->formateur_id = $request->formateur;
        $insert_groupe->logo = $fille_name;
        $insert_groupe->save();
        return redirect('/groupe');
        // dd($insert_groupe);
    }

    public function get_groupe($id)
    {
        $groupe = Groupe::where('id' , $id)->first();
        $select_annéeformation = AnnéeFormation::all();
        $select_formateur = Formateur::all();
        return view('edit', compact('groupe', 'select_annéeformation', 'select_formateur'));
        // return $groupe;
    }

    public function delete($id)
    {
        $delete_groupe = Groupe::where('id' , $id);
        $delete_groupe->delete();
        return redirect('/groupe');
    }

    public function edit(Request $request, $id)
    {
        $edit_groupe = Groupe::where('id', $id)->first();
        $edit_groupe->name = $request->name;
        $edit_groupe->anneeformation_id = $request->aneeformation;
        $edit_groupe->formateur_id = $request->formateur;
        if($request->image) {
            $fille_name = $request->image->getClientOriginalName();
            $file_path = 'upload/' . $fille_name;
            $path = Storage::disk('public')->put($file_path, file_get_contents($request->image));

            $edit_groupe->logo = $fille_name;
        }

        $edit_groupe->save();
        return redirect('/groupe');
    }

    public function exportGroupes(Request $request)
    {
        return Excel::download(new ExportGroupe, 'groupes.xlsx');
    }
}
