@extends('layouts.master')

@section('title', 'Daftar Sampah')

@section('content')
    @foreach ($sampah as $sampah1)
    <table style="width:100%">
      <td>
        <tr>
          <a href="/sampah/{{$sampah1->id}}">{{ $sampah1->jenis}}</a>
        </tr>
        <tr>
          <form action="/sampah/{{$sampah1->id}} " method="post">

            <input type="submit" name="submit" value="delete">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
          </form>
        </tr>

      </td>
    </table>
    @endforeach

@endsection('content')
