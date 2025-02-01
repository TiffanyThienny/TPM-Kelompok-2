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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID (primary key)
            $table->string('name'); // Kolom nama
            $table->string('password'); // Kolom password
            $table->string('team_name')->unique(); // Kolom team_name (unik)
            $table->enum('type', ['binusian', 'non_binusian']); 
            $table->timestamps(); // Kolom created_at dan updated_at
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Kolom email (primary key)
            $table->string('token'); // Kolom token
            $table->timestamp('created_at')->nullable(); // Kolom created_at
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Kolom ID (primary key)
            $table->foreignId('user_id')->nullable()->index(); // Kolom user_id (foreign key)
            $table->string('ip_address', 45)->nullable(); // Kolom IP address
            $table->text('user_agent')->nullable(); // Kolom user agent
            $table->longText('payload'); // Kolom payload
            $table->integer('last_activity')->index(); // Kolom last activity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Hapus tabel users
        Schema::dropIfExists('password_reset_tokens'); // Hapus tabel password_reset_tokens
        Schema::dropIfExists('sessions'); // Hapus tabel sessions
    }
};