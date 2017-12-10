@extends('layouts.master')

@section('title', 'Masukkan Nilai')

@section('content')
    <ol>
        <ul><a>Kelas 10 IPA</a>
            <li>10 IPA 1</li>
            <li>10 IPA 2</li>
            <li>10 IPA 3</li>
        </ul>
        <ul><a>Kelas 11 IPA</a>
            <li>11 IPA 1</li>
            <li>11 IPA 2</li>
            <li>11 IPA 3</li>
        </ul>
        <ul><a>Kelas 12 IPA</a>
            <li>12 IPA 1</li>
            <li>12 IPA 2</li>
            <li>12 IPA 3</li>
            <li>12 IPA 3</li>
            <li><a href={{"/nilai/siswa/12IPA5"}}/>12 IPA 5</li>
        </ul>
    </ol>
@endsection('content')
