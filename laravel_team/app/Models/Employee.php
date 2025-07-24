<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','date_of_birth','email','address','phone','job_title','job_change_id'];
    public function jobChange()
    {
        return $this->belongsTo(JobChange::class);
    }

}
