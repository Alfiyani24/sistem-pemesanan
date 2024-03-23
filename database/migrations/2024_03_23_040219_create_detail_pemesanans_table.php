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
        Schema::create('detail_pemesanans', function (Blueprint $table) {
            $table->id("id_detail_pemesanan");
            $table->unsignedBigInteger("id_pemesanan");
            $table->foreign("id_pemesanan")->references("id_pemesanan")->on("pemesanans")->onDelete("cascade");
            $table->string("nama_pemesan");
            $table->string("jenis_identitas");
            $table->string("no_identitas");
            $table->string("keperluan_khusus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanans');
    }
};
