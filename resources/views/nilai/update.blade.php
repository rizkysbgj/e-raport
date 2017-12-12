@extends('layouts.master')

@section('title', 'Masukkan Nilai')

@section('content')

    <form method="post">
    <table>
      <input type="hidden" name="nisn" value="{{request()->route('nisn')}}"><hr>
      <input type="hidden" name="kodemapel" value="{{Auth::user()->kodemapel}}"><hr>
      <tr>
        <td><h3>Pengetahuan</h3></td>
        <td><h3>Praktikum</h3></td>
      </tr>
      @foreach ($nilaipengetahuans as $nilaipengetahuan)
        @foreach ($nilaiketerampilans as $nilaiketerampilan)
      <tr>
        <td><label>KD1 &emsp;</label><input type="text" name="nilai1" value="{{$nilaipengetahuan->kd1}}"><hr></td>
        <td><input type="text" name="nilaiprak1" value="{{$nilaiketerampilan->kd1}}"><hr></td>
      </tr>
      <tr>
        <td><label>KD2 &emsp;</label><input type="text" name="nilai2" value="{{$nilaipengetahuan->kd2}}"><hr></td>
        <td><input type="text" name="nilaiprak2" value="{{$nilaiketerampilan->kd2}}"><hr></td>
      </tr>
      <tr>
        <td><label>KD3 &emsp;</label><input type="text" name="nilai3" value="{{$nilaipengetahuan->kd3}}"><hr></td>
        <td><input type="text" name="nilaiprak3" value="{{$nilaiketerampilan->kd3}}"><hr></td>
      </tr>
      <tr>
        <td><label>KD4 &emsp;</label><input type="text" name="nilai4" value="{{$nilaipengetahuan->kd4}}"><hr></td>
        <td><input type="text" name="nilaiprak4" value="{{$nilaiketerampilan->kd4}}"><hr></td>
      </tr>
      <tr>
        <td><label>KD5 &emsp;</label><input type="text" name="nilai5" value="{{$nilaipengetahuan->kd5}}"><hr></td>
        <td><input type="text" name="nilaiprak5" value="{{$nilaiketerampilan->kd5}}"><hr></td>
      </tr>
        @endforeach
      @endforeach
      <tr>
        <td>&emsp;&emsp;&emsp; <input type="submit" name="submit" value="Update"></td>
      </tr>

    </table>
        {{ csrf_field() }}
    </form>
@endsection('content')
