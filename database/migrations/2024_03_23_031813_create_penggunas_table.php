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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id("id_pengguna");
            $table->string("nama_lengkap");
            $table->string("nama_pengguna");
            $table->enum("role", ["admin","pelanggan"]);
            $table->string("katasandi");
            $table->string("email");
            $table->string("no_hp");
            $table->string("alamat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
