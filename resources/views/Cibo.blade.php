<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cibo</title>
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
<!-- <h1 class="text-center text-danger">Cibo</h1>
<div class="container">
    <div class="row">
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://s6890.pcdn.co/wp-content/uploads/2010/04/Carciofi-alla-giudia-8.jpg" class="card-img-top" alt="Carciofi alla giudia">
             <div class="card-body">
             <h5 class="card-title">Carciofi alla giudia</h5>
             <p class="card-text"></p>
             <a href="https://www.youtube.com/watch?v=ReELOwdqpic" class="btn btn-primary">Videoricetta</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://blog.giallozafferano.it/albe/wp-content/uploads/2020/08/15FA1142-B5FA-410C-878B-2B8745B85F64_001-960x949.jpg" class="card-img-top" alt="Carbonara">
             <div class="card-body">
             <h5 class="card-title">Carbonara</h5>
             <p class="card-text"></p>
             <a href="https://www.youtube.com/watch?v=84V2InbOEiM" class="btn btn-primary">Videoricetta</a>
          </div>
         </div>           
        </div>
        <div class="col-4 md-3 my-5">
          <div class="card" style="width: 18rem;">
             <img src="https://handletheheat.com/wp-content/uploads/2023/12/best-tiramisu-recipe-SQUARE.jpg" class="card-img-top" alt="Tiramisù">
             <div class="card-body">
             <h5 class="card-title">Tiramisù</h5>
             <p class="card-text"></p>
             <a href="https://www.youtube.com/watch?v=9YCaRsHE8g4" class="btn btn-primary">Videoricetta</a>
          </div>
         </div>           
        </div>
      </div>
    </div>   
</div>  -->
<title>Cibo</title>
<x-layout>
  <div class="container">
      <h2 class="text-center text-danger my-5">Cibo</h2>
      <div class="row justify-content-center align-items-stretch card-container">
        @foreach ($Cibo as $cibo)
        <div class="col-12 col-md-3">
         <div class="card">
           <img src="{{ $cibo['Immagine'] }}" class="card-img-top" alt="{{ $cibo['Cibo'] }}">
           <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title">Cibo: {{$cibo['Cibo']}}</h5>
            <p class="card-text">Tipologia:{{$cibo['Tipologia']}} </p>
            <a href="{{ $cibo['Videoricetta'] }}" class=" text-center btn btn-primary mx-5">Videoricetta</a>
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