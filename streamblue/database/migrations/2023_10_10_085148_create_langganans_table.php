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
        Schema::create('langganans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('tipe');
            $table->string('ket',100);
            $table->string('gambar',100);
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langganans');
    }
};
