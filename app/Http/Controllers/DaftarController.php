<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nasabah;

class DaftarController extends Controller
{
      public function create()
      {
        return view('/daftar');
      }

      public function store(Request $request)
      {
        $nasabah = new Nasabah;
        $nasabah->nama = $request->nama;
        $nasabah->no_rekening = $request->no_rekening;
        $nasabah->alamat = $request->alamat;
        $nasabah->save();

        return redirect('nasabah');
      }

      public function update(Request $request, $id)
      {
        $nasabah = Nasabah::find($id);
        $nasabah->nama = $request->nama;
        $nasabah->no_rekening = $request->no_rekening;
        $nasabah->save();
      }

      public function delete($id)
      {
        $nasabah = Nasabah::find($id);
        $nasabah->delete();
        return redirect('nasabah');
      }

}
