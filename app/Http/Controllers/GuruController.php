<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class GuruController extends Controller
{
    public function __construct(){
        $this->Materi = new Materi();

    }

    public function tambah()
    {
        return view('/guru.form_materi');
    }

    public function tambah_pengumuman()
    {
        return view('/guru.tambah_pengumuman');
    }
    public function editMateri($id)
    {
        $data = [
            'materi' => $this->Materi->editMateri($id)
        ];
        return view('/guru.edit_materi', $data);
    }
    public function simpanEdit(){

        Request()->validate([
            'bab' => 'required', 
            'judul' => 'required',
            'materi' => 'required',
            'deskripsi' => 'required',
        ], [
            'bab.required' => 'Tidak boleh kosong',
            'judul.required' => 'Tidak boleh kosong',
            'materi.required' => 'Tidak boleh kosong',
            'deskripsi.required' => 'Tidak boleh kosong',
        ]);

        $materi = Materi::find(Request()->id);
        $materi->bab = Request()->bab;
        $materi->judul = Request()->judul;
        $materi->materi = Request()->materi;
        $materi->deskripsi = Request()->deskripsi;

        $this->Materi->simpanEdit($materi);

        return redirect()->route('akses');

    }

    
}
