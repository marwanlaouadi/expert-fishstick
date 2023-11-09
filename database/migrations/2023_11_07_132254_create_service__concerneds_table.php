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
        Schema::create('service_concerneds', function (Blueprint $table) {
            $table->id();
            $table->char('Name', 50);
            $table->char('Full_Name', 100);
            $table->char('Address', 255);
            $table->string('Email');
            $table->char('Phone_Number', 10);
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service__concerneds');
    }
};
