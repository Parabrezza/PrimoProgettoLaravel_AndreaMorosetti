<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartoni</title>
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
             <img src="https://m.media-amazon.com/images/M/MV5BZjNhODYzZGItZWQ3Ny00ZjViLTkxMTUtM2EzN2RjYjU2OGZiXkEyXkFqcGdeQXVyMTI5MTc0OTIy._V1_.jpg" class="card-img-top" alt="South Park">
             <div class="card-body">
             <h5 class="card-title">South Park</h5>
             <p class="card-text">Autori: Trey Parker, Matt Stone </p>
             <a href="https://www.youtube.com/watch?v=gNBnO-0mpiE" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://www.today.it/~shared/images/tv/locandine/archer-1x.jpg" class="card-img-top" alt="Archer">
             <div class="card-body">
             <h5 class="card-title">Archer</h5>
             <p class="card-text">Autore: Adam Reed </p>
             <a href="https://www.youtube.com/watch?v=I3ueuk2NUFk" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://m.media-amazon.com/images/M/MV5BN2NkODVhNDYtNzJhYy00ZTY5LWJkNTktN2EzOWJkYWI5MjdmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTEwMTkwOTI@._V1_FMjpg_UX1000_.jpg" class="card-img-top" alt="Drawn Together">
             <div class="card-body">
             <h5 class="card-title">Drawn Together</h5>
             <p class="card-text">Autori: Dave Jeser, Matt Silverstein </p>
             <a href="https://www.youtube.com/watch?v=YU_O1TBu3Cw" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
      </div>
    </div>   
</div>  -->
<title>Cartoni</title>
<x-layout>
    <div class="container">
      <h2 class="text-center text-danger my-5">Cartoni Preferiti</h2>
      <div class="row justify-content-center align-items-stretch card-container">
        @foreach ($Cartoni as $cartoni)
        <div class="col-12 col-md-3">
          <div class="card">
            <img src="{{ $cartoni['Immagine'] }}" class="card-img-top" alt="{{ $cartoni['Titolo'] }}">
            <div class="card-body d-flex flex-column justify-content-center">
              <h5 class="card-title">Titlolo: {{$cartoni['Titolo']}}</h5>
              <p class="card-text">Autore:{{$cartoni['Autore']}} </p>
              <a href="{{ $cartoni['Trailer'] }}" class="btn btn-primary mx-5">Trailer</a>
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