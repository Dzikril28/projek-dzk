@extends('layouts.app')

@section('title', 'Edit Data Ruangan')

@section('content')
    <div>
        <a href="{{ route('ruangan.index') }}">Kembali</a>
    </div>
    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="inputNamaBarang">Nama Barang</label>
            <input type="text" name="nama_barang" id="inputNamaBarang" value="{{ old('nama_barang', $barang->nama_barang) }}">
        </div>
        <div>
            <label for="inputKodeInventaris">Kode Inventaris</label>
            <input type="text" name="kode_inventaris" id="inputKodeInventaris" value="{{ old('kode_inventaris', $barang->kode_inventaris) }}">
        </div>
        <div>
            <label for="inputKategoriID">Kategori ID</label>
            <input type="text" name="kategori_id" id="inputKategoriID" value="{{ old('kategori_id', $barang->kategori_id) }}">
        </div>
                <div>
            <label for="inputRuanganID">Ruangan ID</label>
            <input type="text" name="ruangan_id" id="inputRuanganID" value="{{ old('ruangan_id', $barang->ruangan_id) }}">
        </div>
                <div>
            <label for="inputTahunPengadaan">Tahun Pengadaan</label>
            <input type="text" name="tahun_pengadaan" id="inputTahunPengadaan" value="{{ old('tahun_pengadaan', $barang->tahun_pengadaan) }}">
        </div>
                <div>
            <label for="inputSumberDana">Sumber Dana</label>
            <input type="text" name="sumber_dana" id="inputSumberDana" value="{{ old('sumber_dana', $barang->sumber_dana) }}">
        </div>
                <div>
            <label for="inputKondisi">Kondisi</label>
            <input type="text" name="kondisi" id="inputKondisi" value="{{ old('kondisi', $barang->kondisi) }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection