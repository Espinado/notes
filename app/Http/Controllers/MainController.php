<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;

class MainController extends Controller
{
    public function index(request $request)
    {
        if ($request->session()->get('filter')) {
            $query = $request->session()->get('filter');
            $allPublicNotes = Note::where('title', 'like', '%' . $query . '%')
                ->orWhere('note', 'like', '%' . $query . '%')
                ->where('private', false)->get();
        } else {
            $allPublicNotes = Note::where('private', false)->get();
        }

        return view('welcome', compact('allPublicNotes'));
    }
    public function read_note($uuid)
    {
        $note = Note::where('uuid', $uuid)->first();
        return view('read', compact('note'));
    }

    public function setFilters(request $request)
    {

        if ($request->filter) {
            $request->session()->put('filter', $request->filter);
        }

        return redirect('/');
    }
    public function clearFilters(Request $request)
    {
        $request->session()->forget('filter');
        return back();
    }
}
