<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['NIM','Nama','Tempat_Lahir','Tanggal_Lahir','Alamat','Cita_Cita','Hobi'];
}
