<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    function getData(){
        return[
            'id' => '1234',
            'password' => 'vero',

        ];
        

    }
}
