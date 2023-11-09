<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_concerneds_id'); 
            $table->unsignedBigInteger('job_seekers_id'); 
            $table->enum('type', ['Online', 'In Person']); 
            $table->dateTime('interview_datetime'); 
            $table->unsignedInteger('duration_minutes')->nullable(); 
            $table->string('zoom_address')->nullable(); 
            $table->string('location')->nullable(); 
            $table->enum('status', ['Scheduled', 'Completed', 'Canceled']); 
            $table->text('interview_notes')->nullable(); 
            $table->timestamps();
    
           
            
            $table->foreign('service_concerneds_id')->references('id')->on('service_concerneds');
            $table->foreign('job_seekers_id')->references('id')->on('job_seekers');
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
