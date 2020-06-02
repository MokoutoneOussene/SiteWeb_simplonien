
@extends('include/head')

<header class="d-flex p-2">
    <div class="flex-grow-1 mr-5 mm">
        <img src="{{asset('picture/logo.png')}}" width="160px" alt="logo">
    </div>

    <div class="align-item-end flex-grow-1">
        <nav>
            <ul class="d-flex justify-content-around h-75">
                <li class="btn btn-dark mr-5"> <a class="text-light" href="{{url('/')}}">Accueil</a> </li>
                <li class="btn btn-dark mr-5"> <a class="text-light" href="{{url('Nos actualites')}}">Actualité</a> </li>
                <li class="btn btn-dark mr-5"> <a class="text-light" href=""> Evènenement</a> </li>
                <li class="btn btn-dark mr-5"> <a class="text-light" href=""> Nos Apprenants</a> </li>
                <li class="btn btn-dark mr-5"> <a class="text-light" href=""> Nos Alumnis</a> </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </ul>
        </nav>
    </div>
</header>

        <div class="d-flex info">
            <div class="flash text-light ml-5">
                <p>Flash Info:</p>
            </div>
            <marquee class="d-flex text-light info-defil">
                @foreach($liste_actualites as $actu)
                    <span class="mr-2 mt-titre">{{$actu->titre}} : </span>
                    <span class="mr-5">{{$actu->description}} ‖ </span>
                @endforeach
            </marquee>
        </div>
    <div class="container mw-100" id="mt-contenaire">    
        @yield('content')
    </div>