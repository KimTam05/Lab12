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
        Schema::create('kntsanpham', function (Blueprint $table) {
            $table->id();
            $table->string('kntMaSP')->unique();
            $table->string('kntTenSP');
            $table->string('kntHinhAnh');
            $table->integer('kntSoLuong');
            $table->float('kntDongia');
            $table->bigInteger('kntMaLoai')->unsigned();
            $table->tinyInteger('kntStatus');
            $table->timestamps();
            $table->foreign('kntMaLoai')->references('id')->on('kntloaisanpham');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kntsanpham');
    }
};
