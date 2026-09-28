<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form Mahasiswa</title>
</head>
<body>

    <h1>Data Mahasiswa Berhasil Dikirim</h1>

    <p>
        <strong>Nama:</strong>
        {{ $data['nama'] }}
    </p>

    <p>
        <strong>NIM:</strong>
        {{ $data['nim'] }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $data['email'] }}
    </p>

    <p>
        <strong>Usia:</strong>
        {{ $data['usia'] }}
    </p>

    <br>

    <a href="/form-mahasiswa">Kembali ke Form</a>

</body>
</html>