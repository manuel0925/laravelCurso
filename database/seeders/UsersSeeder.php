<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>'Manuel',
            "email"=>'manuel@example.com',
            "password"=>Hash::make('123456'),
            "url"=>'hhtps://manuel.com.do',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            "name"=>'Emmanuel',
            "email"=>'emmanuel@example.com',
            "password"=>Hash::make('123456'),
            "url"=>'hhtps://emmanuel.com.do',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
    }


}
