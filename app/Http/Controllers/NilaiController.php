<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NilaiSiswa;
use App\Models\Siswa;
use App\Models\Kompetensi;
use App\Models\NilaiStore;
use Auth;

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

        $nilaiprak1 = request('nilaiprak1');
        $nilaiprak2 = request('nilaiprak2');
        $nilaiprak3 = request('nilaiprak3');
        $nilaiprak4 = request('nilaiprak4');
        $nilaiprak5 = request('nilaiprak5');

        $nilai = array('kd1' => $nilai1, 'kd2' => $nilai2, 'kd3' => $nilai3, 'kd4' => $nilai4, 'kd5' => $nilai5);
        $nilaiprak = array('kd1' => $nilaiprak1, 'kd2' => $nilaiprak2, 'kd3' => $nilaiprak3, 'kd4' => $nilaiprak4, 'kd5' => $nilaiprak5);

        $nilai = array_filter($nilai);
        $nilaiprak = array_filter($nilaiprak);

        $kdpengetahuan = array_search(max($nilai), $nilai);
        $kdpraktikum = array_search(max($nilaiprak), $nilaiprak);

        $rata2 = array_sum($nilai)/count($nilai);
        $rata2prak = array_sum($nilaiprak)/count($nilaiprak);

        $siswa = Siswa::where('nisn', '=', $nisn)->value('semester');

        $pengetahuanKD = Kompetensi::where('kodemapel', '=', $kodemapel)->value($kdpengetahuan);
        //dd($pengetahuanKD);
        NilaiStore::create([
            'nisn' => $nisn,
            'kode_mapel' => $kodemapel,
            'jenis' => 'pengetahuan',
            'kd1' => $nilai1,
            'kd2' => $nilai2,
            'kd3' => $nilai3,
            'kd4' => $nilai4,
            'kd5' => $nilai5
        ]);

        NilaiStore::create([
            'nisn' => $nisn,
            'kode_mapel' => $kodemapel,
            'jenis' => 'keterampilan',
            'kd1' => $nilaiprak1,
            'kd2' => $nilaiprak2,
            'kd3' => $nilaiprak3,
            'kd4' => $nilaiprak4,
            'kd5' => $nilaiprak5
        ]);

        NilaiSiswa::create([
            'nisn' => $nisn,
            'kode_mapel' => $kodemapel,
            'nilai_pengetahuan' => $rata2,
            'nilai_praktek' => $rata2prak,
            'semester' => $siswa,
            'kd_pengetahuan' => $pengetahuanKD
        ]);

        return view('nilai.create');
    }

    public function show($nisn)
    {
        $nilaipengetahuans = NilaiStore::where('nisn', '=', $nisn)->where('kode_mapel', '=', Auth::user()->kodemapel)->where('jenis', '=', 'pengetahuan')->get();
        $nilaiketerampilans = NilaiStore::where('nisn', '=', $nisn)->where('kode_mapel', '=', Auth::user()->kodemapel)->where('jenis', '=', 'keterampilan')->get();
        //dd($nilaiketerampilans);
        return view('nilai.update', array('nilaipengetahuans'=>$nilaipengetahuans, 'nilaiketerampilans'=>$nilaiketerampilans));
        // $siswas = Siswa::where('kelas', '=', $kelas)->get();
        // return view('nilai.siswa', array('siswas'=>$siswas));
    }

    public function update(Request $request)
    {
        $nisn = request('nisn');
        $kodemapel = request('kodemapel');

        $nilai1 = request('nilai1');
        $nilai2 = request('nilai2');
        $nilai3 = request('nilai3');
        $nilai4 = request('nilai4');
        $nilai5 = request('nilai5');

        $nilaiprak1 = request('nilaiprak1');
        $nilaiprak2 = request('nilaiprak2');
        $nilaiprak3 = request('nilaiprak3');
        $nilaiprak4 = request('nilaiprak4');
        $nilaiprak5 = request('nilaiprak5');

        $nilai = array('kd1' => $nilai1, 'kd2' => $nilai2, 'kd3' => $nilai3, 'kd4' => $nilai4, 'kd5' => $nilai5);
        $nilaiprak = array('kd1' => $nilaiprak1, 'kd2' => $nilaiprak2, 'kd3' => $nilaiprak3, 'kd4' => $nilaiprak4, 'kd5' => $nilaiprak5);

        $nilai = array_filter($nilai);
        $nilaiprak = array_filter($nilaiprak);

        $kdpengetahuan = array_search(max($nilai), $nilai);
        $kdpraktikum = array_search(max($nilaiprak), $nilaiprak);

        $rata2 = array_sum($nilai)/count($nilai);
        $rata2prak = array_sum($nilaiprak)/count($nilaiprak);

        $siswa = Siswa::where('nisn', '=', $nisn)->value('semester');

        $pengetahuanKD = Kompetensi::where('kodemapel', '=', $kodemapel)->value($kdpengetahuan);
        //dd($pengetahuanKD);

        NilaiStore::where('nisn', '=', $nisn)->where('kode_mapel', '=', $kodemapel)
                    ->where('jenis', '=', 'pengetahuan')->update([
            'kd1' => $nilai1,
            'kd2' => $nilai2,
            'kd3' => $nilai3,
            'kd4' => $nilai4,
            'kd5' => $nilai5
        ]);

        NilaiStore::where('nisn', '=', $nisn)->where('kode_mapel', '=', $kodemapel)
                    ->where('jenis', '=', 'keterampilan')->update([
            'kd1' => $nilai1,
            'kd2' => $nilai2,
            'kd3' => $nilai3,
            'kd4' => $nilai4,
            'kd5' => $nilai5
        ]);

        NilaiSiswa::where('nisn', '=', $nisn)->where('kode_mapel', '=', $kodemapel)
                    ->update([
            'nilai_pengetahuan' => $rata2,
            'nilai_praktek' => $rata2prak,
            'kd_pengetahuan' => $pengetahuanKD
        ]);

        // NilaiStore::updateOrCreate([
        //     'nisn' => $nisn,
        //     'kode_mapel' => $kodemapel,
        //     'jenis' => 'pengetahuan',
        //     'kd1' => $nilai1,
        //     'kd2' => $nilai2,
        //     'kd3' => $nilai3,
        //     'kd4' => $nilai4,
        //     'kd5' => $nilai5
        // ]);

        // NilaiStore::updateOrCreate([
        //     'nisn' => $nisn,
        //     'kode_mapel' => $kodemapel,
        //     'jenis' => 'keterampilan',
        //     'kd1' => $nilaiprak1,
        //     'kd2' => $nilaiprak2,
        //     'kd3' => $nilaiprak3,
        //     'kd4' => $nilaiprak4,
        //     'kd5' => $nilaiprak5
        // ]);

        // NilaiSiswa::updateOrCreate([
        //     'nisn' => $nisn,
        //     'kode_mapel' => $kodemapel,
        //     'nilai_pengetahuan' => $rata2,
        //     'nilai_praktek' => $rata2prak,
        //     'semester' => $siswa,
        //     'kd_pengetahuan' => $pengetahuanKD
        // ]);

        return view('nilai.siswa.');
      }
}
