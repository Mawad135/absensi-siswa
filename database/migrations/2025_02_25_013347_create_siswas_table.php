<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        try {
            Schema::create('siswas', function (Blueprint $table) {
                $table->id();
                $table->string('nama_siswa', 30);
                $table->string('nisn', 10);
                $table->string('alamat', 100);
                $table->enum('jk', ['L', 'P']);
                $table->string('no_hp', 13)->nullable();
                $table->string('username', 30);
                $table->string('password', 30);
                $table->string('nama_walimurid', 30);
                $table->string('nohp_walimurid', 13)->nullable();
                $table->string('alamat_walimurid', 100);
                $table->foreignId('lokal_id')->constrained('lokals')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->timestamps();
            });
        } catch (\Exception $e) {
            Log::error('Migration failed: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
