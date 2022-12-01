@extends('layouts.sidebar')
@section('content')

    <div class="mx-auto mt-3" style="width: 800px">
        @if (isset($pendaftaran[0]->id))
            @if ($pendaftaran[0]->terverifikasi == true)
                <div class="alert alert-success">
                    Pendaftaran Telah Terverifikasi
                @elseif ($pendaftaran[0]->pembimbing1Setuju == false || $pendaftaran[0]->pembimbing2Setuju == false)
                    <div class="alert alert-warning">
                        Menunggu Persetujuan Pembimbing
                    @else
                        <div class="alert alert-warning">
                            Menunggu Verifikasi Akademik
            @endif

            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    @if ($pendaftaran[0]->pembimbing1Setuju) checked @endif disabled>
                <label class="form-check-label" for="flexCheckDefault">
                    Persetujuan Dosen Pembimbing 1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                    @if ($pendaftaran[0]->pembimbing2Setuju) checked @endif disabled>
                <label class="form-check-label" for="flexCheckChecked">
                    Persetujuan Dosen Pembimbing 1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                    @if ($pendaftaran[0]->terverifikasi) checked @endif disabled>
                <label class="form-check-label" for="flexCheckChecked">
                    Verifikasi Akademik TIF
                </label>
            </div>
    </div>

    <div class="card mx-auto p-5 border border-primary mb-3" style="width: 800px">
        <form action="{{ route('pendaftaran.store') }}" method="POST" class="mx-5 my-2">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input class="form-control first-bg border border-primary" type="text" name="nama" id="nama"
                    value="{{ $pendaftaran[0]->nama }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control first-bg border border-primary" type="text" name="nim" id="nim"
                    value="{{ $pendaftaran[0]->nim }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="prodi">Program Studi</label>
                <select class="form-control first-bg border border-primary" id="prodi" name="prodi"
                    value="{{ $pendaftaran[0]->prodi }}" disabled>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="pembimbing1">Pembimbing 1</label>
                <input class="form-control first-bg border border-primary" type="text" name="pembimbing1"
                    id="pembimbing1" value="{{ $pendaftaran[0]->pembimbing1 }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="pembimbing2">Pembimbing 2</label>
                <input class="form-control first-bg border border-primary" type="text" name="pembimbing2"
                    id="pembimbing2" value="{{ $pendaftaran[0]->pembimbing2 }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="masaPelaksanaan">Masa Pelaksanaan</label>
                <input class="form-control first-bg border border-primary" type="text" name="masaPelaksanaan"
                    id="masaPelaksanaan" value="{{ $pendaftaran[0]->masaPelaksanaan }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="judul">Judul</label>
                <input class="form-control first-bg border border-primary" type="text" name="judul" id="judul"
                    value="{{ $pendaftaran[0]->judul }}" disabled>
            </div>
            <div class="text-center">
                {{-- <a href="#">
                    <button type="button" class="btn btn-danger">Batalkan Pendaftaran</button>
                </a> --}}
            </div>
        </form>
    @else
        <div class="alert alert-warning">
            Anda belum melakukan pendaftaran ujian skripsi
        </div>
        <div class="text-center">

            <a href="{{ route('pendaftaran.create') }}" class="mx-auto my-5"><Button type="button"
                    class="btn btn-primary">Daftar Sekarang</Button></a>
        </div>
        @endif
    </div>
@endsection
