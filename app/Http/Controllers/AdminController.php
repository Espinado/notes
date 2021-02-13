<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class AdminController extends Controller
{
    public function index()
    {
     $myNotes=Auth::user()->notes;

        return view('dashboard', ['myNotes'=>$myNotes]);
    }
    public function create_note()
    {

        return view('create');
    }
    public function save_note(request $request)
    {
        // dd($request->all());
        $note= new Note;
        $note->note=$request->note;
        $note->author_id=Auth::user()->id;
        $note->private=$request->hidden;
        $note->save();
    }
}
