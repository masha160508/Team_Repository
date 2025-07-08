<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','date_of_birth','email','address','phone','job_title','job_change_id'];
    public function job_change()
    {
        return $this->belongsTo(JobChange::class);
    }

}
