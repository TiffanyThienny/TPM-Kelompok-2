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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("FullName3");
            $table->string("Email3");
            $table->string("WA3");
            $table->string("Line3");
            $table->string("Github3");
            $table->string("BirthPlace3");
            $table->date("Birthdate3");
            $table->string("CV3");
            $table->string("FlazzCard3");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
