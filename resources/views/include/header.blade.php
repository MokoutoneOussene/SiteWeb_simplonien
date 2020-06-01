<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Accueil</title>
</head>

<header class="d-flex p-2">
    <div class="flex-grow-1 mr-5 mm">
        <!-- <h3 class="welcom bloc-img">SIMPLON.CO</h3> -->
        <img src="{{}}" alt="logo">
    </div>

    <div class="align-item-end flex-grow-1">
        <nav>
            <ul class="d-flex justify-content-around h-75">
                <li class="btn btn-dark mr-4"> <a class="text-light" href="">Acceuil</a> </li>
                <li class="btn btn-dark mr-4"> <a class="text-light" href="">Actualié</a> </li>
                <li class="btn btn-dark mr-4"> <a class="text-light" href=""> Evènenement</a> </li>
                <li class="btn btn-dark mr-4"> <a class="text-light" href=""> Nos Apprenants</a> </li>
                <li class="btn btn-dark mr-4"> <a class="text-light" href=""> Nos Alumnis</a> </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </ul>
        </nav>
    </div>
</header>

</html>