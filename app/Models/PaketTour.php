<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTour extends Model
{
    use HasFactory;
     //menentukan nama tabel
     protected $table = 'paket_tours';
     //menentukan primary key
     protected $primaryKey = 'id_paket';
     //melindungi agar kolom tidak dapat diisi
     protected $guard = 'id_paket';
}
