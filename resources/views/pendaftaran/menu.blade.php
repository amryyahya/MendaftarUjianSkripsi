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
    <link rel="stylesheet" href="assets/app.css">
</head>

<body class="bg-first">
    <br><br><br><br>
    <div class="card text-center mx-auto bg-primary text-white border border-primary my-3" style="width: 500px">
        <h1>Menu</h1>
    </div>
    <div class="card text-center mx-auto p-5 border border-primary" style="width: 500px">
        <a href={{ route('pendaftaran.create') }}><button type="button" class="btn btn-primary" style="width: 200px">Daftar Ujian Skripsi</button></a>
        <a href={{ route('pendaftaran.index') }}><button type="button" class="btn btn-primary mt-4">Lihat Status Pendaftaran</button></a>
    </div>
</body>

</html>
