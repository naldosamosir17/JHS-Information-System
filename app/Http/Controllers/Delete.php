<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Materi;
use App\Models\Kontrol;

class Delete extends Controller
{
    public function deleteMateri($id)
    {
        $data = materi::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deleteUndangan($id)
    {
        $data = kontrol::find($id);
        $data->delete();
        return redirect()->back();
    }
}
