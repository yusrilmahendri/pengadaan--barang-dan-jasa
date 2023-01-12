<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptExeption;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
          'name' => 'Admin',
          'email' => 'Admin@gmail.com',
          'alamat' => 'Yogyakarta',
          'password' => encrypt("admin123"),
        ]);
    }
}
