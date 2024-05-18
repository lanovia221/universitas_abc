<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-3 d-flex justify-content-between align-items-center">
                    <h2 class="h2 mr-auto"> Daftar Dosen</h2>
                    <a href="{{ route('dosens.create') }}" class="btn btn-primary">Pendaftaran Dosen</a>
                </div>
                
                @if(session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dosens as $daftar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ url('/dosen/'.$daftar->id) }}">{{ $daftar->nidn }}</a></td>
                            <td>{{ $daftar->nama }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
