<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AdminController extends Controller
{
    //Можно так вызвать метод аутентификации из самого контроллепра, а в роуте не записывать
    public function __construct()
    {
//        $this->middleware('auth');
    }



//////////////Альтернатива доступа к данным ползователя минуя фасад Auth:: и метод user() который использует конкретный guard() ///////////////////
//    public function show(Request $request)
//    {
//        $user = $request->user();
//        dump($user);
//    }
///////////////////////////////////////////////////

    public function show(){

//    $user = Auth::user();
//    dump($user);


        if(!Auth::check()){
//            $user = User::find(3);
//            dump($user);
//            Auth::guard('web')->login($user);  //принудительная аутентификация без ввода логина и пароля, по ID пользователя
//            Auth::guard('web')->logout($user); //принудительный выход без нажадия на выход, по ID пользователя

//            Auth::loginUsinId(4); //принудительная аутентификация без ввода логина и пароля, по ID пользователя, не используя модель


//            return redirect('login');
        }

        if(Auth::viaRemember()){
            echo "YES";
        }

        dump(Auth::id());

        return view('home');
    }

}
