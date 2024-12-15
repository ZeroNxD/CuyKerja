<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;
    protected $table = 'jobtypes';
    protected $guarded = [];

    public function hirejobs(){
        return $this->hasMany(HireJob::class);
    }
}
