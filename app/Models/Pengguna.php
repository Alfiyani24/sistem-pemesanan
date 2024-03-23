<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    //menentukan nama tabel
    protected $table = 'penggunas';
    //menentukan primary key
    protected $primaryKey = 'id_pengguna';
    //melindungi agar kolom tidak dapat diisi
    protected $guard = 'id_pengguna';
    //untuk menyembunyikan sebuah kolom
    protected $hidden = 'katasandi';

}