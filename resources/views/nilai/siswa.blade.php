@extends('layouts.master')

@section('title', 'Masukkan Nilai')

@section('content')

<hr>
    @foreach($siswas as $siswa)
        <table>
            <tr>
                <td width="150px"><hr> {{ $siswa->nama }} </td>
                <td width="100px"><hr><a href="../../create/{{$siswa->nisn}}"> Input Nilai </a></td>
                <td width="100px"><hr><a href="../../update/{{$siswa->nisn}}"> Ubah Nilai </a></td>
              </tr>
        </table>

        <!-- <ul> {{ $siswa->nama }} </ul>
            <li><a href="../../create/{{$siswa->nisn}}"> Input Nilai </a></li>
            <li><a href="../../update/{{$siswa->nisn}}"> Ubah Nilai </a></li> -->
    @endforeach

@endsection
