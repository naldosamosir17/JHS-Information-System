<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Materi;

class AksesController extends Controller
{
    public function __construct(){
        $this->Materi = new Materi();

    }

    public function index()
    {
        $materi = [
            'materi' => $this->Materi->show_materi(),
        ];

        return view("guru.controller_kls7", $materi);
        
    }

    public function materi_siswa()
    {
        $materi = [
            'materi' => $this->Materi->show_materi(),
        ];

        return view("v_ppkn_op", $materi);
        
    }

    
}
