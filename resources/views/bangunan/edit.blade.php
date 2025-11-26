@extends('layouts.app')

@section('title', 'Edit Data Bangunan')

@section('content')
    <div>
        <a href="{{ route('bangunan.index') }}">Kembali</a>
    </div>
    <form action="{{ route('bangunan.update', $bangunan->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="inputNamaBangunan">Nama Bangunan</label>
            <input type="text" name="nama_bangunan" id="inputNamaBangunan" value="{{ old('nama_bangunan', $bangunan->nama_bangunan) }}">
        </div>
        <div>
            <label for="inputKodeBangunan">Kode Bangunan</label>
            <input type="text" name="kode_bangunan" id="inputKodeBangunan" value="{{ old('kode_bangunan', $bangunan->kode_bangunan) }}">
        </div>
        <div>
            <label for="inputTanahID">Tanah ID</label>
            <input type="text" name="tanah_id" id="inputTanahID" value="{{ old('tanah_id', $bangunan->tanah_id) }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection