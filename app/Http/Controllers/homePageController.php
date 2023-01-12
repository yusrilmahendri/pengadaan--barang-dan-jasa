<?php

namespace App\Http\Controllers;

use App\Suplier;
use \Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class homePageController extends Controller
{

    public function index(){
      $key =  env('APP_KEY');

      $token = Session::get('token');


      $tokenDb = Suplier::where('token', $token)->count();
      if ($tokenDb > 0) {
        $data['token'] = $token;
      }else{
        $data['token'] = "kosong";
      }

      return view('homePage', [
        'token' => $token,
      ]);
    }




}
