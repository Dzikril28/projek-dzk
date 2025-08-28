@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<div>
    <a href="{{ route('kategori.create') }}">Tambah</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td>
                <a href="{{ route('kategori.edit', $item->id) }}">Edit</a>
                <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection