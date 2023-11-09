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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_concerneds_id');
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->decimal('salary', 10, 2)->default(0.00); 
            $table->enum('job_type', ['Full-time', 'Part-time', 'Contract', 'Temporary']); 
            $table->date('posted_at');
            $table->timestamps();

            $table->foreign('service_concerneds_id')->references('id')->on('service_concerneds');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
