<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Note extends Model
{
    use HasFactory;


    protected $fillable = [
        'author_id',
        'title',
        'note',
        'private',
        'uuid'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function author($author_id)
    {
        $author = User::where('id', $author_id)->first();
        return $author;
    }

    public function isAuthor($author_id)
    {
        if (Auth::user()->id == $author_id) {
            return true;
        } else {
            return false;
        }
    }

    }
