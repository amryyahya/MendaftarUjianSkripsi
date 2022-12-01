<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function show($nim){
        $pendaftaran = Pendaftaran::where('nim', $nim)->firstOrFail()->get();
        return view('pendaftaran.status', compact('pendaftaran'));
    }

    public function create(){
        return view('pendaftaran.form');
    }
    public function store(Request $request)
    {

        $post = Pendaftaran::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'pembimbing1' => $request->pembimbing1,
            'pembimbing2' => $request->pembimbing2,
            'masaPelaksanaan' => $request->masaPelaksanaan,
            'judul' => $request->judul,
            'pembimbing1Setuju' => false,
            'pembimbing2Setuju' => false,
            'terverifikasi' => false,
        ]);

        if ($post) {
            return redirect()
                ->route('pendaftaran.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function index(){
        $nim='205150200111064';
        $pendaftaran = Pendaftaran::latest()->where('nim', '=', $nim)->get();
        return view('pendaftaran.status', compact('pendaftaran'));
    }

    public function destroy($id){
        DB::skripsi_app('pendaftarans')->delete();
        return view('pendaftaran');
    }
}
