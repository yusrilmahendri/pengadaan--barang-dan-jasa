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

class PengajuanController extends Controller
{
    public function pengajuan(){
      $key = env('APP_KEY');
      $token = Session::get('token');
      $tokenDb = Admin::where('token', $token)->count();

      if ($tokenDb > 0) {
        return view('pengajuan.list');
      }else{
          return redirect('/loginAdmin')->with('gagal','Password Anda Salah!');
      }

    }
}
