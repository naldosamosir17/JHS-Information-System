<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('v_game');
    }
    public function home()
    {
        $koneksi = mysqli_connect('localhost', 'root', '', 'jhs');
        $kontrol = mysqli_query($koneksi, 'select * from kontrol order by id asc');
        $data = mysqli_fetch_array($kontrol);
        return view('v_home', ['data'=>$data]);
    }
    public function data()
    {
        return view('v_data_induk');
    }
    public function pembelajaran()
    {
        return view('v_pembelajaran');
    }
    public function jadwal()
    {
        return view('v_jadwal');
    }
    public function pengumuman()
    {
        return view('v_pengumuman');
    }
    public function grafik()
    {
        return view('v_grafik');
    }

    public function ppkn()
    {
        return view('v_ppkn');
    }
    public function ppknop()
    {
        return view('v_ppkn_op');
    }
    public function v_kontrol()
    {
        return view('v_kontrol');
    }
}
