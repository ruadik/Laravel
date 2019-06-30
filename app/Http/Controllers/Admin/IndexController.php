<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show() {

////////////////////////1-ый метод передачи переменной
//        $data = array('title'=>'hello World', 'title2'=>'Hello World2', 'title3'=>'Hello World3');
//        return view('default.template', $data);
///////////////////////////////////////////////////////


////////////////////////1-ый метод передачи переменной
//        return view('default.template', ['title'=>'Hello Hello']);
///////////////////////////////////////////////////////


////////////////////////3-ий метод передачи переменной
//        $view = view('default.template');
//
//        $view -> with('title', 'Hello World');
//        $view -> with('title2', 'Hello World2');
//        $view -> with('title3', 'Hello World3');
//
//        return view();
///////////////////////////////////////////////////////


////////////////////////4-ый метод передачи переменной
//return view('default.template')->withTitle('Hello World');
///////////////////////////////////////////////////////


        $array = array(

            'title'=>'Laravel Project',
            'data' =>[
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5'
            ],
            'dataI' =>['List 1','List 2','List 3','List 4','List 5'],

            'bvar' => false,
            'script' =>"<script>alert('hello')</script>"

        );


        if(view()->exists('default.index')){

//            view()->name('default.template', 'myview');            // метод name не существетй в новом laravel
//            return view()->of('myview')->withTitle('Hello World'); // метод name не существетй в новом laravel

            $view = view('default.index', $array);
////            echo view('default.template', ['title'=>'hello World'], getPath()); // метод name не существетй в новом laravel
            echo $view;
            return;

//            $path = config('view.paths');
//            return view()->file($path[0].'/default/layout.blade.php')->withTitle('Hello World через config');



//            return view('default.template')->withTitle('Hello World');
        }

    }
}
