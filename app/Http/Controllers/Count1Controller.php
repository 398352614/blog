<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Count1Controller extends Controller
{
    public function count1(){
        for($i=1;$i<1000;$i=$i+2){
            echo $i,'<br>';
        }
    }
    //
}
