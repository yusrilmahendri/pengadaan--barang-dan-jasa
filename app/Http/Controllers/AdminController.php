<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use \Firebase\JWT\JWT;// libray jwt
use Firebase\JWT\Key;
use Illuminate\Http\Response; // response
use Illuminate\Support\Facades\Validator; // validasi
use Illuminate\Contracts\Encryption\DecryptExeption;

class AdminController extends Controller
{
    public function index(){
      return view('admin.login');
    }

    public function loginAdmin(Request $request){
      $this->validate($request,
        [
          'email' => 'required',
          'password' => 'required',
        ]
      );

      $cek = Admin::where('email', $request->email)->count();
      $adm = Admin::where('token', $request->email)->get();

      if ($cek > 0) {
          foreach($adm as $admin){
            if (decrypt($admin->password) == $request->password){
              $key =  env('APP_KEY');

              $data = array(
                "id" => $admin->id
              );
              $jwt = JWT::encode($data, $key);
              Suplier::where('id', $admin->id)->update([
                'token' => $jwt
              ]);
              Session::put('token', $jwt);
              echo "Selamat Berhasil Login";
              return redirect('/');
            }else{
              return redirect('/loginAdmin')->with('gagal','Password Anda Salah!');
            }
          }
      }
      else{
          return redirect('/loginAdmin')->with('gagal','Password Anda Salah!');
      }

    }

    public function logoutAdmin(){
        $token = Session::get('token');

        if (Admin::where('token', $token)->update([
              'token' => 'keluar',
          ]
        )){
            Session::put('token',"");
            
        }else{
          return redirect('/loginAdmin')->with('gagal','Password or email anda salah!');
        }
    }

}
