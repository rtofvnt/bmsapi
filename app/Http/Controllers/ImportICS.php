<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImportICS extends Controller
{
    //


    public function import($url){

        $response = Http::get($url);
        
        if ($response->failed()) {
           dd('fuck');
        } else {
        $output = $response->body();
        }



        $array = [

          
                ['DTEND'=>'20230214'],
                ['DTSTART'=>'20230213'],
        ];
        }   
}
