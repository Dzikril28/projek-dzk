@extends ('layouts.app')

@section('tittle', 'Data Barang')

@section('content')
    <div>
        <a href="{{ route('barang.create') }}">Tambah Data</a>
    </div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama Barang</td>
                <td>Kode Inventaris</td>
                <td>Kategori ID</td>
                <td>Ruangan ID</td>
                <td>Tahun Pengadaan</td>
                <td>Suber Dana</td>
                <td>Kondisi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item )

            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->kode_inventaris }}</td>
                <td>{{ $item->kategori_id }}</td>
                <td>{{ $item->ruangan_id }}</td>
                <td>{{ $item->tahun_pengadaan }}</td>
                <td>{{ $item->sumber_dana }}</td>
                <td>{{ $item->kondisi }}</td>
                <td>
                    <a href="{{ route('barang.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

@endsection