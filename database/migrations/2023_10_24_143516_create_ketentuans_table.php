<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ketentuans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('lomba_id');
        $table->text('deskripsi');
        $table->foreign('lomba_id')->references('id')->on('lombas')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketentuans');
    }
};
