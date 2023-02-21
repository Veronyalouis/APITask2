<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData(){
        return[
            'name' => 'ojo',
            'age' => '24',
            'address' => 'elShrouqCity',
            'name'=> 'vero',
            
        ];
    }
}
