@extends('layouts.master')
 
@section('content')
     <div class="row">       
          <div class="col-sm-4">         
               {{-- TODO: Imagen de la película --}}     
               <img src="{{$Peliculas->poster}}" style="height:200px"/>   
          </div>     
          <div class="col-sm-8">          
               {{-- TODO: Datos de la película --}}     
               <h2>{{$Peliculas->title}}</h2>
               <h5>{{$Peliculas->year}}</h5><br>
               <h5>{{$Peliculas->director}}</h5>
               <h5>{{$Peliculas->synopsis}}</h5>
              
              
               @if ($Peliculas->rented == false)
                    <p> Estado disponible </p>
                    <button type="button" class="btn btn-primary">Alquilar Pelicula</button>
               @else
                    <p> Pelicula actualmente alquilada </p>
               @endif
               <button type="button" class="btn btn-danger">Devolver Pelicula</button>
               <a class="btn btn-outline-warning" href="{{ url('/catalog/edit/'.$Peliculas->id)}}" role="button" >Editar Pelicula</a>
                
          </div> 
     </div>
@stop