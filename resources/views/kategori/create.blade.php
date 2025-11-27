@extends('layouts.app')

@section('title', 'Tambah Data Kategori')

@section('content')
    <div>
        <a href="{{ route('kategori.index') }}">Kembali</a>
    </div>
    <form action="{{ route('kategori.store') }}" method="post">
        @csrf
        <div>
            <label for="inputNamaKategori">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="inputNamaKategori" value="{{ old('nama_kategori') }}">
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection