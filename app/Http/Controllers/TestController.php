<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{
    public function test($ads){
        echo __METHOD__;
        echo "<br>";
        echo $ads;
    }
}