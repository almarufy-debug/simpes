<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Santri</title>
</head>
<body>

    <h1>Data Santri</h1>

    <p>
        /santri/createTambah Santri</a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>JK</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($santris as $santri)
                <tr>
                    <td>{{ $santri->nis }}</td>
                    <td>{{ $santri->nama }}</td>
                    <td>{{ $santri->jenis_kelamin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>