<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Film_Controller extends Controller
{
    public function film (){
        $Film = [
            ["Titolo" => "Oppenheimer",
            "Regista" => "Christopher Nolan",
            "Trailer" => "https://www.youtube.com/watch?v=tTcE_yRnANc",
            "Immagine" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb0niU5_-nJcGruRTitqp6LWLeP5Av8LnPWcJ4eUz8avZ9zpXb"],

            ["Titolo" => "Il ragazzo e l'airone",
             "Regista" => "Hayao Miyazaki", 
             "Trailer" => "https://www.youtube.com/watch?v=IVHsUddTmK0",
             "Immagine" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRn3Z3WXM9Kd41R1qyb02bl1Y0S1izeqPl7KI61qCsZjnaAlFcp"],

            ["Titolo" => "Perfect Days",
             "Regista" =>"Wim Wenders",
             "Trailer" => "https://www.youtube.com/watch?v=PUAaGSqiN-c",
             "Immagine" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTave5vWS53sLVJ6fCK2qZr8ZDD415tC9Zzr0tz2rf6BbHesC2k"],
        ];
        return view('Film', ['Film'=> $Film]);} 
}

