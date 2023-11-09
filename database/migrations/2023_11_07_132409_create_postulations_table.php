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
        Schema::create('postulations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_seeker_id'); 
            $table->unsignedBigInteger('interview_id'); 
            $table->unsignedBigInteger('job_id');
            $table->timestamp('postulation_datetime')->default(now()); 
            $table->enum('status', ['Pending', 'Accepted', 'Rejected'])->default('Pending'); // Application status
            //$table->text('feedback')->nullable(); hada ida kachma yhabo ydiro note 3la wach sra 
            $table->timestamps();
    
            
            $table->foreign('job_seeker_id')->references('id')->on('job_seekers');
            $table->foreign('interview_id')->references('id')->on('interviews');
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulations');
    }
};