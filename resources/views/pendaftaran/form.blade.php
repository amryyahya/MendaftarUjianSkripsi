<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi</title>
    <!-- Bootstrap core CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bg-first {
            background-color: #f0ebf8
        }
    </style>
</head>

<body class="bg-first">
    <div class="card border rounded-4 border-primary mx-auto my-3" style="width: 800px">
        <div class="card-header bg-primary text-white text-center">
            <h2>Form Pendaftaran Ujian Skripsi</h2>
        </div>
    </div>
    <div class="card border rounded-4 border-primary mx-auto mb-5" style="width: 800px">

        <div class="card-body">
            <form action="{{ route('pendaftaran.store') }}" method="POST" class="mx-5 my-2">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama</label>
                    <input class="form-control border border-primary" type="text" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nim">NIM</label>
                    <input class="form-control border border-primary" type="text" name="nim" id="nim">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="prodi">Program Studi</label>
                    <select class="form-control border border-primary" id="prodi" name="prodi">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="pembimbing1">Pembimbing 1</label>
                    <input class="form-control border border-primary" type="text" name="pembimbing1"
                        id="pembimbing1">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="pembimbing2">Pembimbing 2</label>
                    <input class="form-control border border-primary" type="text" name="pembimbing2"
                        id="pembimbing2">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="masaPelaksanaan">Masa Pelaksanaan</label>
                    <input class="form-control border border-primary" type="text" name="masaPelaksanaan"
                        id="masaPelaksanaan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="judul">Judul</label>
                    <input class="form-control border border-primary" type="text" name="judul" id="judul">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
