<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Dosen</title>
    <!-- Tambahkan link ke CSS Bootstrap jika diperlukan -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container pt-3 bg-white">
        <div class="col-md-8 col-xl-5">
            <h1>Pendaftaran Dosen</h1>

            <form action="{{ route('dosens.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nidn">NIDN</label>
                    <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ old('nidn') }}">
                    @error('nidn')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-2">Daftar</button>
            </form>
        </div>
    </div>
    <!-- Tambahkan link ke JavaScript Bootstrap jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
