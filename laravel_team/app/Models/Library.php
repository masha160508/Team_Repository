<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['name','place','type','year_open','count_books'];
}
