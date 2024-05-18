<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah</h1>
    <form action="{{ route('mata-kuliahs.store') }}" method="POST">
        @csrf
        <label for="nama">Nama Mata Kuliah:</label><br>
        <input type="text" id="nama" name="nama"><br>
        
        <label for="hari">Hari:</label><br>
        <input type="text" id="hari" name="hari"><br>
        
        <label for="mulai_kelas">Mulai Kelas:</label><br>
        <input type="text" id="mulai_kelas" name="mulai_kelas"><br>
        
        <label for="berakhir_kelas">Berakhir Kelas:</label><br>
        <input type="text" id="berakhir_kelas" name="berakhir_kelas"><br>
        
        <label for="sks">SKS:</label><br>
        <input type="text" id="sks" name="sks"><br>
        
        <label for="ruang_kelas">Ruang Kelas:</label><br>
        <input type="text" id="ruang_kelas" name="ruang_kelas"><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
