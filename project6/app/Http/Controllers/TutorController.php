<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    //
    public function index()
    {
        $tutors = Tutor::all();
        return view('tutor-dashboard', compact("tutors"));
    }
    public function tutorForm()
    {
        return view('addTutor');
    }
    public function storingTutor(Request $request)
    {
        $tutor = new Tutor();
        $tutor->firstname = $request->firstname;
        $tutor->lastname = $request->lastname;
        $tutor->email = $request->email;
        $tutor->imgURL = $request->imgURL;
        $tutor->save();
        return redirect('/Tutordashboard');
    }
    public function editTutor($id)
    {
        $tutor = Tutor::where('id', $id)->get();
        return view('editTutor', compact("tutor"));
    }
    public function updateTutor(Request $request, $id)
    {
        Tutor::where('id', $id)->update(['firstname' => $request->firstname, 'lastname' => $request->lastname, 'email' => $request->email, 'imgURL' => $request->imgURL]);
        return redirect('/Tutordashboard');
    }
    public function deleteTutor($id)
    {
        Tutor::where('id', $id)->delete();
        return redirect('/Tutordashboard');
    }
}
