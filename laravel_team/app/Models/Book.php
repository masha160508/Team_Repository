<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','language_id','author','category_id','publication_date','description','image','src'];
public function language()
{
    return $this->belongsTo(Language::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}

       }


