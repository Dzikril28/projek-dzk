@extends('layouts.app')

@section('title', 'Tambah Data Barang')

@section('content')
    <div>
        <a href="{{ route('barang.index') }}">Kembali</a>
    </div>
    <form action="{{ route('barang.store') }}" method="post">
        @csrf
        <div>
            <label for="inputNamaBarang">Nama Barang</label>
            <input type="text" name="nama_barang" id="inputNamaBarang" value="{{ old('nama_barang') }}">
        </div>
        <div>
            <label for="inputKodeInventaris">Kode Inventaris</label>
            <input type="text" name="kode_inventaris" id="inputKodeInventaris" value="{{ old('kode_inventaris') }}">
        </div>
        <div>
            <label for="inputKategoriID">Kategori ID</label>
            <input type="text" name="kategori_id" id="inputKategoriID" value="{{ old('kategori_id') }}">
        </div>
                <div>
            <label for="inputRuanganID">Ruangan ID</label>
            <input type="text" name="ruangan_id" id="inputRuanganID" value="{{ old('ruangan_id') }}">
        </div>
        <div>
            <label for="inputTahun_pengadaan">Tahun Pengadaan</label>
            <input type="text" name="tahun_pengadaan" id="inputTahun_pengadaan" value="{{ old('tahun_pengadaan') }}">
        </div>
        <div>
            <label for="inputSumberDana">Sumber Dana</label>
            <input type="text" name="sumber_dana" id="inputSumberDana" value="{{ old('sumber_dana') }}">
        </div>
            <div>
            <label for="inputKondisi">Kondisi</label>
            <input type="text" name="kondisi" id="inputKondisi" value="{{ old('kondisi') }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection