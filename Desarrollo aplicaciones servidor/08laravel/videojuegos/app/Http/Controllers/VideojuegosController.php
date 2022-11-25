<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
class VideojuegosController extends Controller
{
    //
    public function index(){
        /*
        $videojuegos = [
            ["Call of Duty",60,18,"Este es el carlos duti"],
            ["Pokemon Purpura",50,7,"Este es el Pokemon Españita"],
            
        ];
        */
        $videojuegos=Videojuego::all();
        $mensaje = "Aqui tenemos un listado de videojuegos";
        return view("videojuegos/index",[
            "videojuegos" => $videojuegos,
            "mensaje" => $mensaje
        ]);
    }

    public function create(){
        return view("videojuegos/create");
    }

    public function store(Request $request){
        $videojuego = new Videojuego;
        $videojuego -> titulo = $request -> input("titulo");
        $videojuego -> precio = $request -> input("precio");
        $videojuego -> pegi = $request -> input("pegi");
        $videojuego -> descripcion = $request -> input("descripcion");
        $videojuego -> save();

        return redirect("videojuegos");
    }

    public function show($id){
        $videojuego=Videojuego::find($id);
        return view("videojuegos/show",[
            "videojuego" => $videojuego
        ]);
    }

}
