<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'pemesanans';
     //menentukan primary key
     protected $primaryKey = 'id_pemesanan';
     //melindungi agar kolom tidak dapat diisi
     protected $guard = 'id_pemesanan';
}
