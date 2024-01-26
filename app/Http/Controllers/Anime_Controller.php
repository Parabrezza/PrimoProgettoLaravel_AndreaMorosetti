<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Anime_Controller extends Controller
{
    public function anime(){
        $Anime = [
            ["Titolo" => "Berserk",
            "Autore" => "Kentarō Miura",
            "Trailer" => "https://www.youtube.com/watch?v=0MIw4xzxcTU",
            "Immagine"=> "https://www.crunchyroll.com/imgsrv/display/thumbnail/480x720/catalog/crunchyroll/128a3b34307dac418454b3a8831a495f.jpe"],

            ["Titolo" => "Fullmetal Alchemist",
             "Autore" => "Hiromu Arakawa", 
             "Trailer" => "https://www.youtube.com/watch?v=g_pR8e-SCnE",
             "Immagine"=> "https://m.media-amazon.com/images/I/61GWN9NPJvL._AC_UF1000,1000_QL80_.jpg"],

            ["Titolo" => "Cowboy Bebop",
             "Autore" =>"Hajime Yatate",
             "Trailer" => "https://www.youtube.com/watch?v=OhNwckCLzis",
             "Immagine"=> "https://m.media-amazon.com/images/I/912VwwzfCGL._AC_UF1000,1000_QL80_.jpg"],
            
        ];
        return view('Anime', ['Anime'=> $Anime]);} 
}