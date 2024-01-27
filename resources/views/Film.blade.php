<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film</title>
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
    <!-- <h1 class="text-center text-danger">Film</h1>
<div class="container">
    <div class="row">
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb0niU5_-nJcGruRTitqp6LWLeP5Av8LnPWcJ4eUz8avZ9zpXb" class="card-img-top" alt="Oppenheimer">
             <div class="card-body">
             <h5 class="card-title">Oppenaimer</h5>
             <p class="card-text">Regista Christopher Nolan </p>
             <a href="https://www.youtube.com/watch?v=tTcE_yRnANc" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRn3Z3WXM9Kd41R1qyb02bl1Y0S1izeqPl7KI61qCsZjnaAlFcp" class="card-img-top" alt="Il ragazzo e l'airone">
             <div class="card-body">
             <h5 class="card-title">Il ragazzo e l'airone</h5>
             <p class="card-text">Regista Hayao Miyazaki </p>
             <a href="https://www.youtube.com/watch?v=IVHsUddTmK0" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTave5vWS53sLVJ6fCK2qZr8ZDD415tC9Zzr0tz2rf6BbHesC2k" class="card-img-top" alt="Perfect Days">
             <div class="card-body">
             <h5 class="card-title">Perfect Days</h5>
             <p class="card-text">Regista Wim Wenders </p>
             <a href="https://www.youtube.com/watch?v=PUAaGSqiN-c" class="btn btn-primary">Trailer</a>
          </div>
         </div>           
        </div>
      </div>
    </div>   
</div>  -->
<title>Film</title>
<x-layout>
  <div class="container">
     <h2 class="text-center text-danger my-5">Ultimi film visti al cinema</h2>
     <div class="row justify-content-center align-items-stretch card-container">
        @foreach ($Film as $film)
       <div class="col-12 col-md-3 my-3">
          <div class="card">
            <img src="{{ $film['Immagine'] }}" class="card-img-top picture" alt="{{ $film['Titolo'] }}">
            <div class="card-body d-flex flex-column justify-content-center">
              <h5 class="card-title">Titlolo: {{$film['Titolo']}}</h5>
              <p class="card-text">Regista:{{$film['Regista']}} </p>
              <a href="{{ $film['Trailer'] }}" class="btn btn-primary mx-5">Trailer</a>
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


