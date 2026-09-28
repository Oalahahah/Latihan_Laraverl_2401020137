<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>

    <h1>Form Data Mahasiswa</h1>

    {{-- Menampilkan pesan error --}}
    @if ($errors->any())
        <h3>Terjadi kesalahan:</h3>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/form-mahasiswa" novalidate>

        @csrf

        <div>
            <label for="nama">Nama:</label>
            <br>
            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama') }}"
            >
        </div>

        <br>

        <div>
            <label for="nim">NIM:</label>
            <br>
            <input
                type="text"
                id="nim"
                name="nim"
                value="{{ old('nim') }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <br>
            <input
                type="text"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >
        </div>

        <br>

        <div>
            <label for="usia">Usia:</label>
            <br>
            <input
                type="number"
                id="usia"
                name="usia"
                value="{{ old('usia') }}"
            >
        </div>

        <br>

        <button type="submit">Kirim</button>

    </form>

</body>
</html>