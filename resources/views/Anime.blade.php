<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body> -->
  <!-- Inizio Navbar   -->
  <!-- <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Film">Film</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Anime">Anime</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Cibo">Cibo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Cartoni">Cartoni</a>
  </li>
</ul> -->
<!-- Fine Navbar -->
<!-- Inizio Card -->
<!-- <h1 class="text-center text-danger">Cartoni</h1>
<div class="container">
    <div class="row">
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/128a3b34307dac418454b3a8831a495f.jpe" class="card-img-top" alt="Berserk">
             <div class="card-body">
             <h5 class="card-title">Berserk</h5>
             <p class="card-text">Autore: Kentarō Miura</p>
             <a href="https://www.youtube.com/watch?v=0MIw4xzxcTU" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://m.media-amazon.com/images/I/61GWN9NPJvL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="Fullmetal alchemist">
             <div class="card-body">
             <h5 class="card-title">Fullmetal alchemist</h5>
             <p class="card-text">Autore: Hiromu Arakawa </p>
             <a href="https://www.youtube.com/watch?v=g_pR8e-SCnE" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://m.media-amazon.com/images/I/912VwwzfCGL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="Cowboy Bebop">
             <div class="card-body">
             <h5 class="card-title">Cowboy Bebop</h5>
             <p class="card-text">Autore: Hajime Yatate</p>
             <a href="https://www.youtube.com/watch?v=OhNwckCLzis" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
      </div>
    </div>   
</div>  -->
<title>Anime</title>
<x-layout>
  <div class="container">
    <h2 class="text-center text-danger my-5">Anime Preferiti</h2>
    <div class="row justify-content-center align-items-center">
      @foreach ($Anime as $anime)
      <div class="col-12 col-md-3">
        <div class="card">
          <img src="{{ $anime['Immagine'] }}" class="card-img-top" alt="{{ $anime['Titolo'] }}">
          <div class="card-body">
            <h5 class="card-title">Titlolo: {{$anime['Titolo']}}</h5>
            <p class="card-text">Autore:{{$anime['Autore']}} </p>
            <a href="{{ $anime['Trailer'] }}" class="btn btn-primary">Trailer</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</x-layout>
  <!-- Fine Card -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> -->