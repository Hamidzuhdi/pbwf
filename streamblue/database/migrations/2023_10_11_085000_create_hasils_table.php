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
        Schema::create('hasils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('tgl_hasil');
            $table->string('nama_hasil',20);
            $table->unsignedBigInteger('pertandingan_id');
            $table->foreign('pertandingan_id')->references('id')->on('pertandingans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasils');
    }
};
