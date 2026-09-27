<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Santri</title>
</head>
<body>

    <h1>Tambah Santri</h1>

    <p>
        /santriKembali ke Data Santri</a>
    </p>

    @if ($errors->any())
        <div style="color: red;">
            <strong>Data belum dapat disimpan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    /santri
        @csrf

        <p>
            <label for="nis">NIS</label>
            <br>
            <input
                type="text"
                id="nis"
                name="nis"
                value="{{ old('nis') }}"
                required
            >
        </p>

        <p>
            <label for="nama">Nama</label>
            <br>
            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ old('nama') }}"
                required
            >
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <br>

            <select
                id="jenis_kelamin"
                name="jenis_kelamin"
                required
            >
                <option value="">Pilih jenis kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </p>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>