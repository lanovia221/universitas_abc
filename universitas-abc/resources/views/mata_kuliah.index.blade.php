<!-- resources/views/mata_kuliah/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Mata Kuliah</h1>
    @if ($mataKuliahs->isEmpty())
        <p>Tidak ada mata kuliah yang ditemukan.</p>
    @else
        <ul>
            @foreach ($mataKuliahs as $mataKuliah)
                <li>
                    <a href="{{ route('mata-kuliahs.show', $mataKuliah->id) }}">{{ $mataKuliah->nama }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
