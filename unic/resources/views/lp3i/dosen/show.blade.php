<!DOCTYPE html>
<html>
<head>
    <title>Biodata Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-3 d-flex justify-content-end">
                    <h1 class="h2 mr-auto">Biodata {{ $dosen->nama }}</h1>
                    <a href="{{ route('dosens.edit', ['dosen' => $dosen->id]) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('dosens.destroy', ['dosen' => $dosen->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                    </form>
                </div>

                <hr>
                <ul>
                    <li><b>NIDN: </b> {{ $dosen->nidn }}</li>
                    <li><b>Nama: </b> {{ $dosen->nama }}</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
