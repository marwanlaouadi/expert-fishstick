<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs'; 

    protected $fillable = [
        'service_concerneds_id',
        'title',
        'description',
        'location',
        'salary',
        'job_type',
        'posted_at',
    ];

   

    public function serviceConcerned()
    {
        return $this->belongsTo(ServiceConcerned::class, 'service_concerneds_id');
    }
}
