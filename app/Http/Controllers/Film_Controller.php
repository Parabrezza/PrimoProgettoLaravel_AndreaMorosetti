<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Film_Controller extends Controller
{
    public function film (){
        $Film = [
            ["Titolo" => "Barbie",
            "Regista" => "Greta Gerwig",
            "Trailer" => "https://youtu.be/WaOn1q0PHoE?si=FW9RJQznIVAktDBl",
            "Immagine" => "https://play-lh.googleusercontent.com/4oBnwh7qa3wVjcZUcgDKI0YouY9LeoG3dm09OaNQ_TMEAJzlQzP8BGu643kD9VhNFUjPH_p7wxMpqk5JrF0"],
            
            ["Titolo" => "Oppenheimer",
            "Regista" => "Christopher Nolan",
            "Trailer" => "https://www.youtube.com/watch?v=tTcE_yRnANc",
            "Immagine" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb0niU5_-nJcGruRTitqp6LWLeP5Av8LnPWcJ4eUz8avZ9zpXb"],
            
            ["Titolo" => "Killers of the Flower Moon",
            "Regista" => "Martin Scorsese",
            "Trailer" => "https://youtu.be/EP34Yoxs3FQ?si=psZafpMvhM2lKWV7",
            "Immagine" => "https://pad.mymovies.it/filmclub/2017/09/129/locandina.jpg"],

            ["Titolo" => "Il ragazzo e l'airone",
             "Regista" => "Hayao Miyazaki", 
             "Trailer" => "https://www.youtube.com/watch?v=IVHsUddTmK0",
             "Immagine" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRn3Z3WXM9Kd41R1qyb02bl1Y0S1izeqPl7KI61qCsZjnaAlFcp"],

            ["Titolo" => "Perfect Days",
             "Regista" => "Wim Wenders",
             "Trailer" => "https://www.youtube.com/watch?v=PUAaGSqiN-c",
             "Immagine" => "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTave5vWS53sLVJ6fCK2qZr8ZDD415tC9Zzr0tz2rf6BbHesC2k"],

             ["Titolo" => "Povere Creature",
             "Regista" => "Yorgos Lanthimos",
             "Trailer" => "https://www.youtube.com/watch?v=RlbR5N6veqw",
             "Immagine" => "https://www.valdelsacinema.it/wp-content/uploads/2024/01/Povere-Creature-poster-11-2-2023-scaled-1.jpg"],
        ];
        return view('Film', ['Film'=> $Film]);} 
}

