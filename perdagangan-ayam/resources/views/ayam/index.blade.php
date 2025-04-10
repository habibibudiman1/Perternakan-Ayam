<!DOCTYPE html>
<html>
<head>
    <title>Daftar Ayam</title>
</head>
<body>
    <h1>Daftar Ayam</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Berat (gram)</th>
                <th>Harga (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ayams as $ayam)
            <tr>
                <td>{{ $ayam->jenis }}</td>
                <td>{{ $ayam->berat }}</td>
                <td>Rp{{ number_format($ayam->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
