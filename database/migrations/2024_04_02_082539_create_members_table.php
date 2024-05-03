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
            $table->string('username');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('password');
            $table->string('nama_usaha');
            $table->text('alamat');
            $table->unsignedBigInteger('jenis_usaha_id');
            $table->foreign('jenis_usaha_id')->references('id')->on('jenis_usahas')->onDelete('cascade');
            $table->unsignedBigInteger('klasifikasi_usaha_id');
            $table->foreign('klasifikasi_usaha_id')->references('id')->on('klasifikasi_usahas')->onDelete('cascade');
            $table->string('rating_usaha');
            $table->enum('status',["diterima","ditolak", "n/a"])->default('n/a');
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
