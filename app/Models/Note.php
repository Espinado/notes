<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function author($author_id) {
        $author=User::where('id', $author_id)->first();
        return $author;
    }


}
