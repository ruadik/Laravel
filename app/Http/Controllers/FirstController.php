<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 20.03.2019
 * Time: 9:53
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FirstController extends Controller {

    public function show ($id){
//        echo __METHOD__;
        echo $id;
    }

}