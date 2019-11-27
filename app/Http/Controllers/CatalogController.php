<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;

class catalogController extends Controller
{
    public function getIndex(){
        
		#Modificamos el metodo getIndex siguiendo la guia, se obtuvieron los elementos de la base de
		#datos que se encunetra en la tabla movie para retornarlo en la vista catalog.index
		$peliculas = Movie::all();

		return view('catalog.index', ['Peliculas' => $peliculas]);
        
		
        
    }

    public function getShow($id){
	   
		#Para modificar el metodo getShow obtenemos aquella pelicula donde se le pasa
		#un parametro numerico y se hizo utilizando el metodo findOrFail
		$pelicula = Movie::findOrFail($id+1);
        return view('catalog.show', ['Peliculas' => $pelicula]);
        
    }
    public function getCreate(){
        return view('catalog.create');
    }
    public function getEdit($id){
		#Aqui se implemento el anterior metodo.
        $pelicula = Movie::findOrFail($id);
        #Notification::success('La película se ha guardado/modificado correctamente');
        return view('catalog.edit', ['Peliculas' => $pelicula]);

        
    }

   
    
}
