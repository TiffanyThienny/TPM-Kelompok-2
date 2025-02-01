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

        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("FullName");
            $table->string("Email");
            $table->string("WA");
            $table->string("Line");
            $table->string("Github");
            $table->string("BirthPlace");
            $table->date("Birthdate");
            $table->string("CV");
            $table->string("FlazzCard");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
