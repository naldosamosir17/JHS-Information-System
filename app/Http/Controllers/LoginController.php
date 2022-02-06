<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontrol;
use Illuminate\support\Facades\DB;

class LoginController extends Controller
{
    

    public function loginprocess(Request $request){


        session_start();

        $username = $request->username;
        $password = $request->password;

        $koneksi = mysqli_connect("localhost","root","","jhs");

        $data = 'SELECT * FROM user WHERE username=? AND password=?';

        $statement = $koneksi->prepare($data);
        $statement->bind_param('ss', $username, $password);
        $statement->execute();

        $result_set = $statement->get_result();
        if ($result_set->num_rows) {
            $user=$_POST['username'];
            $query=mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user'");
            $datas=mysqli_fetch_array($query);
            $role=$datas['role'];
            if($role=='siswa'){
                $_SESSION['user'] = $_POST['username'];
                return redirect('/v_home');
            } else if($role=='guru'){
                $_SESSION['user'] = $_POST['username'];
                return redirect('/dashboard');
            } else{
                $_SESSION['user'] = $_POST['username'];
                return redirect('/homeAdmin');
            }            
        } else {
            return redirect('/')->with('alert','Password atau Username, Salah !');
        }
    }

    public function logout(){
        session_start();
        $_SESSION['user'] = '';
        unset($_SESSION['user']);
        session_unset();
        session_destroy();
        return redirect('/')->with('alert-success','Berhasil logout');
    }

    public function homeAdmin(){
        return view('admin.home');
    }
}