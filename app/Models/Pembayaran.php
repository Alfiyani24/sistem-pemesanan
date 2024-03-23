<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'pembayarans';
     //menentukan primary key
     protected $primaryKey = 'id_pembayaran';
     //melindungi agar kolom tidak dapat diisi
     protected $guard = 'id_pembayaran';
}
