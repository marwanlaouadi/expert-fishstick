<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $table = 'interviews'; 

    protected $fillable = [
        'service_concerneds_id',
        'job_seekers_id',
        'type',
        'interview_datetime',
        'duration_minutes',
        'zoom_address',
        'location',
        'status',
        'interview_notes',
    ];

   

    public function serviceConcerned()
    {
        return $this->belongsTo(ServiceConcerned::class, 'service_concerneds_id');
    }

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seekers_id');
    }
}
