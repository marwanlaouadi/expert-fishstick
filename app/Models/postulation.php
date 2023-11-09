<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    use HasFactory;

    protected $table = 'postulations'; // 

    protected $fillable = [
        'job_seeker_id',
        'interview_id',
        'job_id',
        'postulation_datetime',
        'status',
        
    ];

    

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seeker_id');
    }

    public function interview()
    {
        return $this->belongsTo(Interview::class, 'interview_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
