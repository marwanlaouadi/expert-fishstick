<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms'; 

    protected $fillable = [
        'id_job_seekers',
        'questions',
        'cv_path',
    ];

    

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'id_job_seekers');
    }
}
