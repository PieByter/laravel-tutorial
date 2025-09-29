<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class _Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'author', 'body'];
}