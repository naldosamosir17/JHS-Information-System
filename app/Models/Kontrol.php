<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class Kontrol extends Model
{
    protected $table='kontrol';

    protected $fillable = [
        'nama', 'peserta', 'waktu'
    ];

    public function add_kontrol($kontrol){
        return Kontrol::create($kontrol);
    }

    public function showUndangan(){
        return DB::table('kontrol')->orderby('id', 'asc')->get();
    }

    public function editUndangan($id){
        return DB::table('kontrol')->where('id', $id)->get();
    }

    public function simpanUndangan($data){
        $data->save();
    }

}
