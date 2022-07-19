<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mass Assignment (2 cara, $fillable / $guarded)
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
}
