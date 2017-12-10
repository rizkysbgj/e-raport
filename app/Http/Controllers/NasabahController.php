<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nasabah;

class NasabahController extends Controller
{
    public function index()
    {
      $nasabah = Nasabah::all();
      return view('nasabah', ['nasabah'=>$nasabah]);
    }

    public function show($kelas)
    {
      $nasabah = Nasabah::find($kelas);
      return view('view',['nasabah' => $nasabah] );
    }

}
