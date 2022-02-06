<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Materi;


class PembelajaranController extends Controller
{
    public function __construct(){
        $this->Materi = new Materi();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        Request()->validate([
            'bab' => 'required', 
            'judul' => 'required',
            'materi' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',
        ], [
            'bab.required' => 'Tidak boleh kosong',
            'judul.required' => 'Tidak boleh kosong',
            'materi.required' => 'Tidak boleh kosong',
            'deskripsi.required' => 'Tidak boleh kosong',
            'file.required' => 'Tidak boleh kosong',
        ]);

        $materi = [
            'bab' => $request->bab,
            'judul' => $request->judul,
            'materi' => $request->materi,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,
        ];

        $this->Materi->add_materi($materi);
        return redirect()->route('tampil');          
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $materi = [
            'materi' => $this->Materi->show_materi(),
        ];

        return view('guru.controller_kls7', $materi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = materi::find($id);
        
    }

   

    

   
}
