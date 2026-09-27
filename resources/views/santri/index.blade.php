<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Santri</title>
</head>
<body>

    <h1>Data Santri</h1>

    <button
        type="button"
        onclick="window.location.href='/santri/create'"
    >
        Tambah Santri
    </button>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>JK</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($santris as $santri)
                <tr>
                    <td>{{ $santri->nis }}</td>
                    <td>{{ $santri->nama }}</td>
                    <td>{{ $santri->jenis_kelamin }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada data santri.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>