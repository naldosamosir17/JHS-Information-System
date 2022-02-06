<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi8 extends Model
{
    protected $table='materi8';

    protected $fillable = [
        'bab', 'judul', 'materi', 'deskripsi', 'file'
    ];

    public function add_materi($materi){
        return Materi8::create($materi);
    }

    public function show_materi(){
        return DB::table('materi')->orderby('id', 'asc')->get();
    }
}
