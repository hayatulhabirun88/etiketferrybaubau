<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kode_tiket');
            $table->bigInteger('harga_tiket');
            $table->string('fasilitas');
            $table->string('kendaraan')->nullable();
            $table->string('plat')->nullable();
            $table->bigInteger('penumpang_id');
            $table->bigInteger('keberangkatan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
