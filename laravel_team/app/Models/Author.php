<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name',
        'date_birthday','place_of_birth',
        'date_death','place_of_death',
        'job', 'place_studies',
        'start_study','graduated',
        'additional_information',];
}
