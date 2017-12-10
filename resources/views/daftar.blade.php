@extends('layouts.master')

@section('title', 'Masukkan Nilai')

@section('content')
    <form class="/nasabahs" method="post">
      <input type="text" name="nama"><hr>
      <input type="text" name="no_rekening"> <hr>
      <input type="text" name="alamat"> <hr>


      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form>
@endsection('content')
