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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('tensanpham',255)->unique();
            $table->string('image',1000);
            $table->string('mota',1000);
            $table->integer('id_loaisanpham');
            $table->integer('soluong');
            $table->integer('xuatxu');
            $table->integer('giaban');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanpham');
    }
};
