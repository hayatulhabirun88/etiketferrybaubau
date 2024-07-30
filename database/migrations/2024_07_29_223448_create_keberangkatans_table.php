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
        Schema::create('keberangkatans', function (Blueprint $table) {
            $table->id();
            $table->date('jadwal');
            $table->time('jam_keberangkatan');
            $table->time('jam_kedatangan');
            $table->string('berangkat');
            $table->string('tujuan');
            $table->bigInteger('kapal_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keberangkatans');
    }
};
