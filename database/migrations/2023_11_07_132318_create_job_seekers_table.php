<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->char('full_name', 100);
            $table->char('address', 255);
            $table->string('email')->unique();
            $table->string('password');
            $table->char('phone_number', 15);
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('forms');
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
