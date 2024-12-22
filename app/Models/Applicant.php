<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $table = "applicant";
    protected $guarded = [];


    public function hirejobs(){
        return $this->belongsTo(HireJob::class, 'job_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'jobseeker_id');
    }

}
