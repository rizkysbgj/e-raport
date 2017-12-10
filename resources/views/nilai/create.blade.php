@extends('layouts.master')

@section('title', 'Masukkan Nilai')

@section('content')
    <h3>Pengetahuan</h3>
    <form method="post">
    <table>
      <input type="hidden" name="nisn" value="{{request()->route('id')}}"><hr>
      <input type="hidden" name="kodemapel" value="{{Auth::user()->kodemapel}}"><hr>
      <tr>
        <td><label>KD1 &emsp;</label><input type="text" name="nilai1"><hr></td>
      </tr>
      <tr>
        <td><label>KD2 &emsp;</label><input type="text" name="nilai2"><hr></td>
      </tr>
      <tr>
        <td><label>KD3 &emsp;</label><input type="text" name="nilai3"><hr></td>
      </tr>
      <tr>
        <td><label>KD4 &emsp;</label><input type="text" name="nilai4"><hr></td>
      </tr>
      <tr>
        <td><label>KD5 &emsp;</label><input type="text" name="nilai5"><hr></td>
      </tr>
      <tr>
        <td>&emsp;&emsp;&emsp; <input type="submit" name="submit" value="Create"></td>
      </tr>

    </table>
        {{ csrf_field() }}
    </form>
@endsection('content')
