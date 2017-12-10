<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

class SiswaController extends Controller
{
  public function index()
  {
    $siswas = Siswa::all();
    return view('nilai/siswa', ['siswas'=>$siswas]);
  }

  public function show($kelas)
  {

    $siswas = Siswa::where('kelas','=', $kelas);
    dd($siswas);
    return view('nilai/siswa',['siswas' => $siswas]);
  }
}
