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
        Schema::create('membernons', function (Blueprint $table) {
            $table->id();
            $table->string("FullName4");
            $table->string("Email4");
            $table->string("WA4");
            $table->string("Line4");
            $table->string("Github4");
            $table->string("BirthPlace4");
            $table->date("Birthdate4");
            $table->string("CV4");
            $table->string("IDCard4");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membernons');
    }
};
