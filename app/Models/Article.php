<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    /**
     *  See who this article belongs to
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
