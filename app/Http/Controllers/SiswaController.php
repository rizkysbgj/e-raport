<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Auth;

class SiswaController extends Controller
{
  public function index()
  {
    $siswas = Siswa::all();
    return view('nilai.siswa', compact('siswas'));
  }

  public function show($kelas, Request $request)
  {

    $siswas = Siswa::where('kelas', '=', $kelas)->get();
    return view('nilai.siswa', array('siswas'=>$siswas));
  }
}
