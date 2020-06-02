@extends('include/header')

@section('content')
    <h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
    <h4>Actualités de Simplon Burkina</h4>
        
    <div class="d-flex w-100">
        @foreach($liste_actualites as $actu)
            
         <div class="mt-5 mr-3 mt-actu p-3">
             <h4>{{$actu->titre}}</h4>
             <p>{{$actu->description}}</p>
         </div>
        @endforeach
    </div>
    
@endsection
