<!DOCTYPE html>
<html>
<head>
    <title>Universitas ABC - Dosen</title>
</head>
"HELO"
<body>
    <h1>Daftar Dosen</h1>
    <table border="1">
        <tr>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        @foreach ($dosens as $dosen)
        <tr>
            <td>{{ $dosen->nidn }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>
                <a href="/create">Buat MataKuliah</a>
                <a href="#">Edit</a>
                <form action="{{ route('dosens.destroy', $dosen->nidn) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
// {{ route('dosens.show', $dosen->nidn) }}
// {{ route('dosens.edit', $dosen->nidn) }}
