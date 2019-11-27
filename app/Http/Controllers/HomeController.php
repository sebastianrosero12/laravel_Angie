<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHome(){
        
		#Modificamos el metodo getIndex siguiendo la guia, se obtuvieron los elementos de la base de
		#datos que se encunetra en la tabla movie para retornarlo en la vista catalog.index
		$peliculas = Movie::all();

		return view('catalog.index', ['Peliculas' => $peliculas]);
        
		
        
    }
}
