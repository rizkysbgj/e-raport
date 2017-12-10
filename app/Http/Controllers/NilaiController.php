<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NilaiSiswa;

class NilaiController extends Controller
{
    public function create($id)
    {

        return view('nilai.create', array('nisn' => $id));
    }

    public function store(Request $request)
    {
        $nisn = request('nisn');
        $kodemapel = request('kodemapel');

        $nilai1 = request('nilai1');
        $nilai2 = request('nilai2');
        $nilai3 = request('nilai3');
        $nilai4 = request('nilai4');
        $nilai5 = request('nilai5');

        $nilai = array('kd1' => $nilai1, 'kd2' => $nilai2, 'kd3' => $nilai3, 'kd4' => $nilai4, 'kd5' => $nilai5);

        $nilai = array_filter($nilai);
        $rata2 = array_sum($nilai)/count($nilai);

        NilaiSiswa::create([
            'nisn' => $nisn,
            'kode_mapel' => $kodemapel,
            'nilai_pengetahuan' => $rata2
        ]);

        return view('nilai.create');
    }
}
