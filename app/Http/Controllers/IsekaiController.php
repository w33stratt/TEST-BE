<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IsekaiController extends Controller
{
    function modulus(){
        
        $mod = Http::get('http://ecocim-backend-theone.beit.co.id/api/ManualConfig/TestBEIT')['listNilai'];
        echo "<h1>Siswa menikah</h1>"; 
        for($i=0;$i<count($mod);$i++){
            $j = 7;
            
                if($mod[$i] % $j == 0) {
                    echo"<p>".$mod[$i]."</p>";
                }
            }
    }
   
    function prima(){

        $prima = Http::get('http://ecocim-backend-theone.beit.co.id/api/ManualConfig/TestBEIT')['listNilai'];
        echo "<h1>Siswa mati</h1>";
        for($i=0;$i<count($prima);$i++){

            $counter = 0;
            for($j=0;$j<count($prima);$j++){
                if($prima[$i] % $prima[$j] == 0) {
                    $counter++;
                }
            }

            if($counter == 2){
                echo"<p>".$prima[$i]."</p>";
            }
        }
    }
    function huruf(){

        $huruf = Http::get('http://ecocim-backend-theone.beit.co.id/api/ManualConfig/TestBEIT')['listNama'];
        echo "<h1>Siswa kelas 6</h1>";
        for($i=0;$i<count($huruf);$i++){
            if(preg_match("/(C(O))/", $huruf[$i])){
                echo"<p>".$huruf[$i]."</p>";
                }
             }
        }
    }



