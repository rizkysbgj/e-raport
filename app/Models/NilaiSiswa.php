<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model
{
    protected $fillable = ['nilai_pengetahuan', 'nisn', 'kode_mapel'];
    public $timestamps = false;
}
