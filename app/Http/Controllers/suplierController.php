<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suplier;
use Illuminate\Support\Facades\Session;
use \Firebase\JWT\JWT;// libray jwt
use Firebase\JWT\Key;
use Illuminate\Http\Response; // response
use Illuminate\Support\Facades\Validator; // validasi
use Illuminate\Contracts\Encryption\DecryptExeption;  // Enkripsi dan dekriosi data


class suplierController extends Controller
{
    public function index(){
        return view('suplier.login');
    }

    public function masukSuplier(Request $request){

      $this->validate($request,
        [
          'email' => 'required',
          'password' => 'required',
        ]
      );

      $cek = Suplier::where('email', $request->email)->count();
      $sup = Suplier::where('token', $request->email)->get();



        if ($cek > 0) {
            foreach($sup as $suplier){
              if (decrypt($suplier->password) == $request->password){
                $key =  env('APP_KEY');

                $data = array(
                  "id" => $suplier->id
                );


                $jwt = JWT::encode($data, $key);



                Suplier::where('id', $suplier->id)->update([
                  'token' => $jwt
                ]);
                Session::put('token', $jwt);
                return redirect('/');
              }else{
                return redirect('/loginSuplier')->with('gagal','Password Anda Salah!');
              }
            }
        }
        else{
          return redirect('/loginSuplier')->with('gagal','Email Tidak terdaftar!');
        }
    }

    public function logoutSuplier(){
        $token = Session::get('token');

        if (Suplier::where('token', $token)->update([
              'token' => 'keluar',
          ]
        )){
            Session::put('token',"");
            return redirect('/');
        }else{
          return redirect('/loginSuplier')->with('gagal','Password or email anda salah!');
        }
    }



}
