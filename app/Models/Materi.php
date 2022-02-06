<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class Materi extends Model
{
    protected $table='materi';

    protected $fillable = [
        'bab', 'judul', 'materi', 'deskripsi', 'file'
    ];

    public function add_materi($materi){
        return Materi::create($materi);
    }

    public function show_materi(){
        return DB::table('materi')->orderby('bab', 'asc')->get();
    }

    public function editMateri($id){
        return DB::table('materi')->where('id', $id)->get();
    }

    public function simpanEdit($data){
        $data->save();
    }

}
