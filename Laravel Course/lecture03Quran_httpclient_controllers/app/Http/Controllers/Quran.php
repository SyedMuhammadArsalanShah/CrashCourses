<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Quran extends Controller
{
    //
     function getSurahIndex(){


        //   echo "working ....";
          $dataQuran = Http::get("https://api.alquran.cloud/v1/meta");

          return view("index",["collection" => $dataQuran["data"]["surahs"]["references"]]);

     }


     function getSurahRead($num){


        // echo "working ....";
        $dataQuran = Http::get("https://api.alquran.cloud/v1/surah/$num");

        return view("read",["alldata" => $dataQuran["data"]["ayahs"]]);

   }


}
