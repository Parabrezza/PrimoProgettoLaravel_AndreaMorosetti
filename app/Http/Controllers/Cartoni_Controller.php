<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cartoni_Controller extends Controller
{
    public function cartoni (){
        $Cartoni = [
            ["Titolo" => "South Park",
             "Autore" => "Trey Parker, Matt Stone",
             "Trailer" => "https://www.youtube.com/watch?v=gNBnO-0mpiE",
             "Immagine"=> "https://m.media-amazon.com/images/M/MV5BZjNhODYzZGItZWQ3Ny00ZjViLTkxMTUtM2EzN2RjYjU2OGZiXkEyXkFqcGdeQXVyMTI5MTc0OTIy._V1_.jpg"],
                 
            ["Titolo" => "Archer",
             "Autore" => "Adam Reed", 
             "Trailer" => "https://www.youtube.com/watch?v=I3ueuk2NUFk",
             "Immagine"=> "https://www.today.it/~shared/images/tv/locandine/archer-1x.jpg"],
            
             ["Titolo" => "Drawn Together",
              "Autore" => "Dave Jeser, Matt Silverstein",
              "Trailer" => "https://www.youtube.com/watch?v=YU_O1TBu3Cw",
              "Immagine"=> "https://m.media-amazon.com/images/M/MV5BN2NkODVhNDYtNzJhYy00ZTY5LWJkNTktN2EzOWJkYWI5MjdmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTEwMTkwOTI@._V1_FMjpg_UX1000_.jpg"],
        ];
        return view('Cartoni', ['Cartoni'=> $Cartoni]);} 
}
