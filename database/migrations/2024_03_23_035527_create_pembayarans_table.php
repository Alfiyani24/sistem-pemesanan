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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id("id_pembayaran");
            $table->unsignedBigInteger("id_pemesanan");
            $table->foreign("id_pemesanan")->references("id_pemesanan")->on("pemesanans")->onDelete("cascade");
            $table->unsignedBigInteger("id_paket");
            $table->date("tanggal_pembayaran");
            $table->integer("jumlah_bayar");
            $table->string("bukti_pembayaran");
            $table->enum("status_pembayaran",["belum lunas","lunas","sedang divalidasi"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
