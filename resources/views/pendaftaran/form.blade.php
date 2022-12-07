@extends('layouts.sidebar')
@section('content')
    <form action="{{ route('pendaftaran.store') }}" method="POST" class="mx-5 my-2"
        onsubmit="return confirm('Pastikan Data yang Anda isi sudah benar?')">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control border border-primary" type="text" readonly="readonly" name="nama" id="nama"
                value="Amry Yahya">

        </div>
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control border border-primary" type="text" readonly="readonly" name="nim"
                id="nim" value="205150200111064">
        </div>
        <div class="mb-3">
            <label class="form-label" for="prodi">Program Studi</label>
            <input class="form-control border border-primary" type="text" readonly="readonly" name="prodi"
                id="prodi" value="Teknik Informatika">
        </div>
        <div class="mb-3">
            <label class="form-label" for="pembimbing1">Pembimbing 1</label>
            <select class="form-control border border-primary" id="pembimbing1" name="pembimbing1">
                <option value="">--- Silahkan Pilih Pembimbing 1 ---</option>
                <option value="Ade Usada, M. Kom">Ade Usada, M. Kom</option>
                <option value="Daliono Hardiansyah, M. Kom">Daliono Hardiansyah, M. Kom</option>
                <option value="Drs. Lidya Kusmawati">Drs. Lidya Kusmawati</option>
                <option value="Prof. Prabowo Halim">Prof. Prabowo Halim</option>
                <option value="Siti Andriani,M. Kom">Siti Andriani,M. Kom</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="pembimbing2">Pembimbing 2</label>
            <select class="form-control border border-primary" id="pembimbing2" name="pembimbing2">
                <option value="">--- Silahkan Pilih Pembimbing 2 ---</option>
                <option value="Ade Usada, M. Kom">Ade Usada, M. Kom</option>
                <option value="Daliono Hardiansyah, M. Kom">Daliono Hardiansyah, M. Kom</option>
                <option value="Drs. Lidya Kusmawati">Drs. Lidya Kusmawati</option>
                <option value="Prof. Prabowo Halim">Prof. Prabowo Halim</option>
                <option value="Siti Andriani,M. Kom">Siti Andriani,M. Kom</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="masaPelaksanaan">Masa Pelaksanaan</label>
            <input class="form-control border border-primary" type="text" name="masaPelaksanaan" id="masaPelaksanaan" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="judul">Judul</label>
            <input class="form-control border border-primary" type="text" name="judul" id="judul" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
    </form>
@endsection
