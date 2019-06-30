<?php

namespace App\Http\Controllers\Admin;

use http\Header;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;


class AboutController extends Controller
{
    //

    public function show(){
        if(view()->exists('default.about')){

            ///////////DB///////////////
//             $articles = DB::select("SELECT * FROM `articles` WHERE id = ?", [2]);
//             $articles = DB::select("SELECT * FROM `articles` WHERE id = :id", ['id'=>2]);
//             $articles = DB::select("SELECT * FROM `articles`");

//             dump($articles); //dd();
                $pages = DB::SELECT("SELECT `name`,`text` From `pages` WHERE alias = :alias", ['alias'=>'about']);
//                dump($pages);
//                foreach ($pages as $page);
//                dump($page);

                return view('default.about')->withPages($pages[0])->withTitle('This is "About" blade layouts');





//            DB::insert("INSERT INTO `articles` (`name`,`text`,`img`) value (?,?,?)",['test 1','text','pic10']);


//            DB::statement('DROP table `articles`');  // Выполняет нейтральные запросы не относящиеся к эталонным

//            $result = DB::connection()->getPdo()->lastInsertId();
//            dump($result);

//            $articles = DB::select("SELECT * FROM `articles`");
//            dump($articles); //dd();

//            $result = DB::UPDATE('UPDATE `articles` SET `name`=? WHERE `id`=?', ['TEST 4', '6']);
//            dump($result);

//            $delete = DB::DELETE('DELETE from `articles` where `id`=?',[7]);
//            dump($delete);
            ////////////////////////////



//            return view('default.about')->withTitle('This is "About" blade layouts');
//            $view = view('default.about')->withTitle('Hello World')->render();
//            return (new Response($view))
//                                        ->header('Content-Type', 'newType')
//                                        ->header('Header-One', 'HederOne');

//
//            return response($view)->header('Content-Type','newType')
//                                  ->header('Header-One', 'HederOne');

//            return response()->json(['name'=>'Hello', 'name2'=>'Hello2']);
//            return response()->view('default.about',['title'=>'Hello world']);
//            return response()->download('robots.txt', 'myrobots.txt', ['HeaderOne'=>'Hello', 'HeaderTwo'=>'World']);
//            return response($view)->withHeaders([
//                                                    'HeaderOne'=>'Hello',
//                                                    'HeaderTwo'=>'World'
//                                                ]);



//            return redirect()->route('home');
//            return redirect()->action('Admin\ContactController@show');
//            return RedirectResponse::create('/articles');
//            return redirect('/articles')->withInput();
//            return redirect('/articles')->with('param1','hello');

//            return response()->myRes('Hello world my first Macros by name myRes');
        }
    }
}
