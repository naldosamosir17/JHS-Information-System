<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Kontrol;

class Kontroller extends Controller
{
    public function __construct(){
        $this->Kontrol = new Kontrol();

    }
    public function Store(Request $request)
    {
        Request()->validate([
            'nama' => 'required', 
            'peserta' => 'required',
            'waktu' => 'required',
            
        ], [
            'nama.required' => 'Tidak boleh kosong',
            'peserta.required' => 'Tidak boleh kosong',
            'waktu.required' => 'Tidak boleh kosong',
            
        ]);

        $kontrol = [
            'nama' => $request->nama,
            'peserta' => $request->peserta,
            'waktu' => $request->waktu,
        ];

        $this->Kontrol->add_kontrol($kontrol);
        return redirect()->route('undangan');         
       
    }    

    public function tampil()
    {
        $kontrol = [
            'kontrol' => $this->Kontrol->showUndangan(),
        ];

        return view('guru.kontrol_siswa', $kontrol);
    }

    public function editUndangan($id)
    {
        $data = [
            'kontrol' => $this->Kontrol->editUndangan($id)
        ];
        return view('/guru.editUndangan', $data);
    }
    public function simpanUndangan(){

        Request()->validate([
            'nama' => 'required', 
            'peserta' => 'required',
            'waktu' => 'required',
            
        ], [
            'nama.required' => 'Tidak boleh kosong',
            'peserta.required' => 'Tidak boleh kosong',
            'waktu.required' => 'Tidak boleh kosong',
            
        ]);

        $kontrol = Kontrol::find(Request()->id);
        $kontrol->nama = Request()->nama;
        $kontrol->peserta = Request()->peserta;
        $kontrol->waktu = Request()->waktu;

        $this->Kontrol->simpanUndangan($kontrol);

        return redirect()->route('undangan');

    }

}
