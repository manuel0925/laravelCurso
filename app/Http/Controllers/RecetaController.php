<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{

    public function __invoke(Request $request)
    {

       $recetas =["pizza","tacos","pastel"];
       $categorias =["comida mexicana","comida argentina","postre"];



       /*return view("recetas.index")
            ->with('Recetas',$recetas)
            ->with('Categorias',$categorias);*/

            return view("recetas.index",compact('recetas','categorias'));
    }
}
