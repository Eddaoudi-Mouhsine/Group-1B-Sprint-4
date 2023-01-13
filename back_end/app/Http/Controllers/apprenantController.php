<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportApprenant;
use App\Imports\importApprenant;



class apprenantController extends Controller
{
    public function index()
    {
        $apprenant = Apprenant::paginate(25);
        return view('apprenant', compact('apprenant'));
    }


    public function exportApprenant(Request $request)
    {
        return Excel::download(new ExportApprenant, 'apprenant.xlsx');
    }

    public function importApprenant(Request $request)
    {
        Excel::import(new importApprenant, $request->file('file_import'));
        return redirect('/Apprenants');
    }
}
