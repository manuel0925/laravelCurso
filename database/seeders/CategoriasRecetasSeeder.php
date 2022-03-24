<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasRecetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Comida Mexicana',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Comida Italiana',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Comida Argentina',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Postre',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Cortes',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Ensaldas',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_recetas')->insert([
            "nombre"=>'Desayuno',
            "created_at"=>date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
    }
}
