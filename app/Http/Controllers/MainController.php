<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;

class MainController extends Controller
{
    public function index() {

        $allPublicNotes=Note::where('private',false)->get();
        return view('welcome');
    }
}
