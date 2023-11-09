<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us'; 

    protected $fillable = [
        'job_seekers_id',
        'email',
        'message',
    ];

    

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'job_seekers_id');
    }
}
