@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <div>
        <a href="{{ route('kategori.index') }}">Kembali</a>
    </div>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="inputNamaKategori">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="inputNamaKategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
        </div>
    </form>
@endsection