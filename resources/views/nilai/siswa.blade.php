@extends('layouts.master')

@section('title', 'Masukkan Nilai')

@section('content')

<hr>
    @foreach($siswas as $siswa)
        <li> {{ $siswa->name }} </li>
    @endforeach

@endsection('content')
