@extends('layouts.app')

@section('title', 'Tambah Data Ruangan')

@section('content')
    <div>
        <a href="{{ route('ruangan.index') }}">Kembali</a>
    </div>
    <form action="{{ route('ruangan.store') }}" method="post">
        @csrf
        <div>
            <label for="inputNamaRuangan">Nama Ruangan</label>
            <input type="text" name="nama_ruangan" id="inputNamaRuangan" value="{{ old('nama_ruangan') }}">
        </div>
        <div>
            <label for="inputKodeRuangan">Kode Ruangan</label>
            <input type="text" name="kode_ruangan" id="inputKodeRuangan" value="{{ old('kode_ruangan') }}">
        </div>
        <div>
            <label for="inputBangunanID">Bangunan ID</label>
            <input type="text" name="bangunan_id" id="inputBangunanID" value="{{ old('bangunan_id') }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection