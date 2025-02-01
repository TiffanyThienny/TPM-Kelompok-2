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
        Schema::create('leadnons', function (Blueprint $table) {
            $table->id();
            $table->string("FullName2");
            $table->string("Email2");
            $table->string("WA2");
            $table->string("Line2");
            $table->string("Github2");
            $table->string("BirthPlace2");
            $table->date("Birthdate2");
            $table->string("CV2");
            $table->string("IDCard2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leadnons');
    }
};
