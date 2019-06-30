<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['uses'=>'Admin\IndexController@show', 'as'=>'home']);



//Route::get('/article/{id}', ['as'=>'article',function ($id) {
//    echo $id;
//}]);

//Route::get('/page/{id}/{cat}', function ($var1,$var2) {
////    return view('page');
////    $id = "hello";
//    echo $var1."|".$var2;
//});

//Route::get('/page/{id?}', function ($var1=50) {
////    return view('page');
////    $id = "hello";
//    echo $var1;
//}) ;

//Route::get('/page/{id}', function ($var1) {
////    return view('page');
////    $id = "hello";
//    echo $var1;
//})->where('$id','[0-9]+');


//Route::get('/page/{id}/{cat}', function ($var1, $var2){
//    echo $var1.'|'.$var2;
//})->where(['id'=>'[0-9]+', 'cat'=>'[A-Z a-z]+']);


Route::group(['prefix'=>'admin'], function (){

    Route::get('/page/create',function (){
//        echo '/page/create';
        return redirect()->route('home');
    });

    Route::get('/page/edit',function (){
        echo '/page/edit';
    });
});




Route::group(['prefix'=>'admin'], function (){

    Route::get('/page/del',function (){
//        echo '/page/create';
        return redirect()->route('article', array('id'=>25));
    });

});




Route::group(['prefix'=>'admin/{id}'], function (){

    Route::get('/page/del/{var}',function ($id){
//        echo '/page/create';
//        return redirect()->route('article',array('id'=>25));
    $route = Route::current();
        echo $route->getName();
//        echo $route->getParameter('var',24);
        print_r($route->parameters());

    })->name('dellpage');

});


//Route::get('/hello', function (){
//echo '<pre>';
////    print_r($_ENV);
////    echo config('app.locale');
////    echo Config::get('app.locale');
////    echo Config::set('app.locale', 'ru');
////    echo env('APP_ENV');
//echo '</pre>';
//});

//Route::post('/comments', function () {
//   print_r($_POST);
//});

//Route::match(['get', 'post'],'/comments', function () {
//    print_r($_POST);
//});


//Route::any('/comments', function () {
//    print_r($_POST);
////    return 'form POST -ed!';
////    var_dump($_POST);
//});

//Route::post('/comments', function () {
//    print_r($_POST);
////    return 'form POST -ed!';
////    var_dump($_POST);
//});


Route::get('/about', ['uses'=>'Admin\AboutController@show', 'as'=>'about']);
Route::get('/test/{ads}','TestController@test');

Route::get('/articles',['uses'=>'Admin\core@getArticles','as'=>'articles']);
Route::get('/article/{id}',[/*'middleware'=>'mymiddle:admin',*/'uses'=>'Admin\core@getArticle','as'=>'article'])/*->middleware(['mymiddle'])*/;


////////////////////////////////////////////  Для ВАЛИДАЦИИ
//Route::match(['get','post'], '/contact/{name?}', ['uses'=>'Admin\ContactController@show', 'as'=>'contact']);

Route::get('/contact', ['middleware'=>['auth'], 'uses'=>'Admin\ContactController@show', 'as'=>'contact']);
Route::post('/contact', ['middleware'=>['auth'], 'uses'=>'Admin\ContactController@store']);

//Route::get('/contact', ['uses'=>'Admin\ContactController@show2', 'as'=>'contact']);
//Route::post('/contact', ['uses'=>'Admin\ContactController@store']);
////////////////////////////////////////////




//list pages
//Route::get('/pages/add','Admin\CoreResource@add');
//Route::resource('/pages','Admin\CoreResource');


Route::resource('/pages','PagesController');
//Route::resource('/pages','Admin\CoreResource')->only(['index','show']);

//Route::resource('/pages','Admin\CoreResource')->except(['index','show']);




//////////////////////////////////////////
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//////////////////////////////////////////
//
//////////////////////////////////////////
//Auth::routes();
//Route::group(['prefix'=>'admin', 'middleware'=>['web', 'auth.basic']], function (){    //'auth.basic'  -- подключает метод базовой аутентификации
//      Route::get('/', ['uses'=>'Admin\AdminController@show', 'as'=>'admin_index']);
//      Route::get('/add/post', ['uses'=>'Admin\AdminPostController@create', 'as'=>'admin_add_post']);
//});
//////////////////////////////////////////
//
//////////////////////////////////////////
//Auth::routes();
//Route::group(['middleware'=>'web'], function () {
//    Route::get('/testlogin', ['uses' => 'Auth\MyAuthController@showLogin']);
//    Route::post('/testlogin', ['uses' => 'Auth\MyAuthController@authenticate']);
//});
//////////////////////////////////////////
///
Route::group(['middleware'=>'web'], function (){
    Route::auth();
});



Route::group(['prefix'=>'admin', 'middleware'=>['web','auth']], function (){

    Route::get('/', ['uses'=>'Admin\AdminController@show', 'as'=>'admin_index']);

    Route::get('/add/post', ['uses'=>'Admin\AdminPostController@show', 'as'=>'admin_add_post']);
    Route::post('/add/post', ['uses'=>'Admin\AdminPostController@create', 'as'=>'admin_add_post_p']);

    Route::get('/update/post/{id}', ['uses'=>'Admin\AdminUpdatePostController@show', 'as'=>'admin_add_post']);
    Route::post('/update/post', ['uses'=>'Admin\AdminUpdatePostController@create', 'as'=>'admin_update_post_p']);

});








////////////////////////////////////////
//Route::get('login', 'Auth\MyAuthController@showLogin');
//Route::post('login', 'Auth\MyAuthController@authenticate');
//Route::post('logout', 'Auth\LoginController@logout');