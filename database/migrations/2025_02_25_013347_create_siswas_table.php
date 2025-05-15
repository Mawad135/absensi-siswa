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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->string('nisn', 10);
            $table->string('alamat', 100);
            $table->enum('jk', ['L', 'P']);
            $table->string('no_hp', 13);
            $table->string('username', 30);
            $table->string('password');
            $table->string('nama_wm', 30);
            $table->string('nohp_wm', 13);
            $table->string('alamat_wm', 100);
            $table->foreignId('local_id')->references('id')->on('locals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};