<?php

namespace App\Http\Controllers;

use App\Suplier;
use Illuminate\Contracts\Encryption\DecryptExeption;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class registrasiController extends Controller
{
    public function index(){
      return view('registrasi.registrasi');
    }

    public function registrasi(Request $request){

      $this->validate($request,
        [
          'name' => 'required',
          'email' => 'required',
          'alamat' => 'required',
          'no_npwp' => 'required',
          'password' => 'required',
        ]
      );

      if(
       Suplier::create(
              [
                "name" => $request->name,
                "email" => $request->email,
                "alamat" => $request->alamat,
                "no_npwp" => $request->no_npwp,
                "password" => encrypt($request->password),
              ]
          )
      ){
        return redirect('/register')->with('berhasil','Data berhasil disimpan');
      }else{
        return redirect('/register')->with('gagal','Data gagal disimpan');
      }
    }
}
