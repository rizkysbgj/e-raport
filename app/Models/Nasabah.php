<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
  protected $fillable = ['nama', 'no_rekening', 'alamat',];
  // protected $guarded = [];
}
