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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id("id_pemesanan");
            $table->unsignedBigInteger("id_pengguna");
            $table->unsignedBigInteger("id_paket");
            $table->foreign("id_pengguna")->references("id_pengguna")->on("penggunas")->onDelete("cascade");
            $table->foreign("id_paket")->references("id_paket")->on("paket_tours")->onDelete("cascade");
            $table->date("tanggal_pemesanan");
            $table->date("tanggal_keberangkatan");
            $table->integer("jumlah_total_pemesan");
            $table->integer("total_biaya");
            $table->enum("status_pemesanan", ["menunggu","proses","selesai"]);
            $table->string("alasan_pembatalan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
