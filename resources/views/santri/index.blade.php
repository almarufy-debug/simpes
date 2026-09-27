<table border="1">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>JK</th>
    </tr>

    @foreach($santris as $santri)
    <tr>
        <td>{{ $santri->nis }}</td>
        <td>{{ $santri->nama }}</td>
        <td>{{ $santri->jenis_kelamin }}</td>
    </tr>
    @endforeach

</table>
