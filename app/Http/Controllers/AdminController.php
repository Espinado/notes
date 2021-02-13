<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {

        $myNotes = Auth::user()->notes;

        return view('dashboard', ['myNotes' => $myNotes]);
    }
    public function create_note()
    {

        return view('create');
    }
    public function save_note(request $request)
    {
        $note = new Note;
        $note->note = $request->note;
        $note->title = $request->title;
        $note->author_id = Auth::user()->id;
        $note->private = $request->hidden;
        $note->uuid = Str::uuid();
        $note->save();
        return redirect('dashboard');
    }

    public function edit_note($uuid)
    {
        $editNote = Note::where('uuid', $uuid)->get();
        return view('edit', compact('editNote'));
    }

    public function update_note(request $request)
    {

        Note::where('uuid', $request->uuid)->update([
            'title' => $request->title,
            'note' => $request->note,
            'private' => $request->hidden
        ]);
        return redirect('dashboard');
    }

    public function share_note(request $request) {

        dd($request->all);
    }
}
