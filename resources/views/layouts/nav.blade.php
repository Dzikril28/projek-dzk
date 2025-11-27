<nav>
    <style>
        nav {
            background: #157347;
            padding: 10px;
        }

        nav a {
            color: white;
            font-weight: bold;
            margin-right: 15px;
            text-decoration: none;
        }

        nav a:hover {
            opacity: 0.8;
        }
    </style>

    <div>
        {{-- @guest --}}
            <a href="#login">Login</a>   
            <a href="#register">Register</a>   
        {{-- @endguest
        @auth --}}
            <a href="#user">Users</a>
            <a href="{{ route('tanah.index') }}">Tanah</a>
            <a href="{{ route('bangunan.index') }}">Bangunan</a>
            <a href="{{ route('ruangan.index') }}">Ruangan</a>
            <a href="{{ route('kategori.index') }}">Kategori</a>
            <a href="{{ route('barang.index') }}">Barang</a>
        {{-- @endauth --}}
    </div>
</nav>
