<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    protected $table = 'job_seekers'; 
    protected $fillable = [
        'full_name',
        'address',
        'email',
        'password',
        'phone_number',
    ];

   
}
