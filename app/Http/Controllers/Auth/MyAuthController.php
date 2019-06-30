<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MyAuthController extends Controller
{
    use AuthenticatesUsers;

    public function showLogin(){
        echo "sssss";
        return view('auth.login');
    }



    public function authenticate(Request $request)
    {

//        echo "nedn";
        $array = $request->all();
        $remember = $request->has('remember');

        if (Auth::attempt([
                            'login'=>$array['login'],
                            'password'=>$array['password']
                          ], $remember))
                            {
                            // Authentication passed..
                                echo "POLUCHILOS";
                            return redirect()->intended('/home');
                            }



        return redirect()->back()
                    ->withInput($request->only('login', 'remember'))
                    ->withErrors([
                                'login'=>'Данные аутентификации не верны'
                                ]);









//        $credentials = $request->only('login', 'password');
//        $remember = $request->has('remember');  // Если галочка ЗАПОМНИТЬ МЕНЯ установена
//
//        if (Auth::attempt($credentials, $remember))
//            {
//            // Authentication passed...
//            return redirect()->intended('/home');
//            }


//        return redirect()->back()
//            ->withInput($request->only('login', 'remember'))
//            ->withErrors([
//                            'login'=>'Данные аутентификации не верны'
//                        ]);


    }

}
