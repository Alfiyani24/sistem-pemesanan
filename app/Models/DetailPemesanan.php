<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'detail_pemesanas';
     //menentukan primary key
     protected $primaryKey = 'id_detail_pemesanan';
     //melindungi agar kolom tidak dapat diisi
     protected $guard = 'id_detail_pemesanan';
     
}
