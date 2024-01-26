<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cibo_Controller extends Controller
{
    public function cibo (){
        $Cibo = [
            ["Cibo" => "Carciofi alla giudia",
            "Videoricetta" => "https://www.youtube.com/watch?v=ReELOwdqpic",
            "Immagine"=>"https://s6890.pcdn.co/wp-content/uploads/2010/04/Carciofi-alla-giudia-8.jpg"],

            ["Cibo" => "Carbonara",
            "Videoricetta" => "https://www.youtube.com/watch?v=84V2InbOEiM",
            "Immagine"=>"https://blog.giallozafferano.it/albe/wp-content/uploads/2020/08/15FA1142-B5FA-410C-878B-2B8745B85F64_001-960x949.jpg"],
            
            ["Cibo" => "Tiramisù",
             "Videoricetta" => "https://www.youtube.com/watch?v=9YCaRsHE8g4",
             "Immagine"=>"https://handletheheat.com/wp-content/uploads/2023/12/best-tiramisu-recipe-SQUARE.jpg"],
        ];
        return view('Cibo', ['Cibo'=> $Cibo]);} 
}
