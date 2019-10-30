<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Count2Controller extends Controller
{
    public function count2(){
        for($i=1;$i<1000;$i++){
            if($i%2==1){
                echo $i,'<br>';
            }
        }
    }
    //
}
