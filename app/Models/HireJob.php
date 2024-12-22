<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireJob extends Model
{
    use HasFactory;
    protected $table = 'hirejobs';
    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function jobtypes(){
        return $this->belongsTo(JobType::class, 'types_id');
    }

    public function applicants(){
        return $this->hasMany(Applicant::class, 'job_id');
    }
}
