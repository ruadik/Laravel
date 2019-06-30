<?php

namespace App\Http\Controllers\Admin;

//use App\Helpers\Contracts\SaveStr;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
//use mysql_xdevapi\Session;
use Validator;
use Session;
use Lang;
use Auth;
use App;
use App\Helpers\Facades\SaveStr;


class ContactController extends Controller
{
    //
//    protected $request;
//
//    public function show(Request $request){
//        $this->request=$request;
//    }


    /**
     * @param Request $request
     * @param bool $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request, $id=false){
        if(view()->exists('default.contact')){


///////////////////СЕССИИ/////////////////////////////////////////////////////////////
//        $result = $request->session()->get('key','default');
//        $result = $request->session()->all();
        $request->session()->put('key', 'свое значение_value');         //добавление своих значений в сессии
//        $request->session()->put('key.first', 'value1');       //добавление своих значений в сессии в виде массива

        ////////////////////////////////////////
//        $request->session()->push('key.second', 'value2');       //добавление своих значений в сессии в виде массива,после каждого обновления добавляется новый массив
        //либо так
//        Session::push('key.second', 'value2');       //добавление через фасад своих значений в сессии в виде массива,после каждого обновления добавляется новый массив

            ///функцией хелпер//
//          session(['key2'=>'значениеЖ']);
//            dump(session('key'));
//            dump(session('key5', 'default'));  // если нет такого значение то выведет DEFAULT

//            Session::forget('key2');  // Удаляет выбранную сессию по ключу
//            Session::flush();  // Удаляет все данные сессии
//            dump(session::pull('key'));  // Вернет данные и сразу же удалит по имени ключа
//            dump(session::flash('massage', 'ЖОПАТОБОЛЬШЕ'));  // Одноразовые данные в сессиях, удаляются сразуже после обновления и комментирования flash
//            session::reflash(); //пересохраняет еще на одно обновление данные записаные методом flash

        ////////////////////////////////////////
            if($request->session()->has('key.first')){
//                $result = $request->session()->all();
//                dump($request);  В место вывода отсюда, можно выводить в шаблоне
            }
////////////////////////////////////////////////////////////////////////////////





//            print_r($request->all());
//            print_r($request->only('name','site'));
//            print_r($request->except('site'));
//            echo '<h1>'.$id.'</h1>';
//            echo $request->has('name');


//            if($request->has('name')) {
//                echo '<h1 style="margin-top: 100px">' . $request->input('name','default') . '</h1>';
//            }

//            echo '<h1 style="margin-top: 100px">' . $request-> name . '</h1>';

//            echo '<h1 style="margin-top: 100px">' . $request->path() . '</h1>';


//            if($request->is('contacts/*')) {
//                echo '<h1 style="margin-top: 100px">' . $request->path() . '</h1>';
//            }

//            echo '<h1 style="margin-top: 100px">' . $request->url() . '</h1>';
//            echo '<h1 style="margin-top: 100px">' . $request->fullUrl() . '</h1>';
//            echo '<h1 style="margin-top: 100px">' . $request->method() . '</h1>';
//            echo '<h1  style="margin-top: 100px">' . $request->root() . '</h1>';
//            echo '<h1  style="margin-top: 100px">' . $request->exists('name') . '</h1>';
//            print_r($request->header());
//            print_r($request->server());
//            print_r($request->segments());




//            if($request->isMethod('post')){
                ///

                ///validation

                ///
//                $request->flash();

//                $request->flush();
//                $request->old('name');

//                $request->flashOnly('name','site');
//                $request->flashExcept('name','text');
//                return redirect()->route('contact'); //переходит по ссылки но не передает даные из сессии
//                return redirect()->route('contact')->withInput(); //не передает данные сессии
//                echo '<h1  style="margin-top: 100px">' . $request->method() . '</h1>';
//            }




//            Волидация
//            Автоматическая валидация с редиректом
//            if($request->isMethod('post')) {
////
//                $massages = [
//                    'name.required' => 'ПОЛЕ :attribute точняк заполняй AUTO_VALIDATE',
//                    'email.max' => 'ПОЛЕ :attribute не больше чем :max -  символов!!! AUTO_VALIDATE',
//                ];
////
//                $rules = [
//                         'name'=>'required|max:10|unique:users,name',
//                         'email'=>'required|email',
//                         ];
////
//                $this->validate($request, $rules, $massages);
////
//                dump($request->all());
//            }



////            Ручная валидация
//            if($request->isMethod('post')) {
//
//
//                $massages = [
//                    'name.required' => 'ПОЛЕ :attribute точняк заполняй ',
//                    'email.required' => 'ПОЛЕ :attribute заполняй ну прям воще....',
//                    'email.max' => 'ПОЛЕ :attribute не больше чем :max -  символов!!! ',
//                    ];
//
//                $validator = Validator::make($request->all(),
//                    [
//                        'name'=>'required',
//                        'email'=>'required'/*max:5*/     //sometimes - если закоментить в шаблоне поле email, то оно проигнорируется!!!
//                    ],
//                    $massages);
//
//
////                Сложные методы валидации
//                 $validator->sometimes(['name','email'], 'required', function ($input){
////                     dump($input);
////                     exit();
//                    return strlen($input->name) >=10;
//                 });
//
//
//
//
////                Добавление дополнительного действия сразу же поле волидации
////                $validator->after(function ($validator){
////                    $validator->errors()->add('name','Дополнительное к полю name сообщение к имеющемуся');
////                });
//
//
//
//
//
//
//                if($validator->fails()){
//
//                    $massages = $validator->errors();
//
////                    if($massages->has('name')){
//////                        dump($massages->get('name'));
//////                        dump($massages->all('<p> :message </p>'));
////                        dump($massages->first('name','<p> :message </p>'));
////                    }
//
//
//
////                    Вывод в массив наименование ошибок с их именами
////                    dump($validator->failed());
////                    exit();
//
//
//
//                    return redirect()->route('contact')->withErrors($validator)->withInput();
//                }
////                dump($validator);
//            }

            $name = Auth::user('admin');

//            $title_head=Lang::get('messages.hello', array('name'=>'BENLADEN'));  //Ручное назначение
//            $title_head=Lang::choice('messages.apple',5;     //Динамический выбор в единственном и множ. чесле

            if(Lang::has('messages.apples')){                       //возможность проверять наличия локализации
                $title_head=Lang::choice('messages.apples',10);     //Динамический выбор с диапазоном
            }


            return view('default.contact',['title'=>'Contacts', 'title_head'=>$title_head]);

        }
    }






//            Создание класса валидации
/////////////////////////////////////////////////////////////////////////////
//         /// Использование ServiceProvider
//    public function store(Request $request, SaveStr $saveStr){
//        if (view()->exists('default.contact')) {
//
//            $saveStr->save($request, Auth::user());
////            return redirect()->route('contact');
//
//            return view('default.contact',['title'=>'Contacts']);
//
//        }
//    }


////         /// Использование ServiceConteiner
//    public function store(Request $request){             //здесь не чего не вызываем
//        if (view()->exists('default.contact')) {
//
////            return redirect()->route('contact');
////            $var = app::make('App\Helpers\Contracts\SaveStr');    //обращяемся к СервисКонтейнеру
//            $var = app::singleton('App\Helpers\Contracts\SaveStr');    //обращяемся к СервисКонтейнеру, запускает один раз и все
//            $var->save($request, Auth::user());                 //вывзываем необходимое действие
//
//            return view('default.contact',['title'=>'Contacts']);
//
//        }
//    }


    /// Использование ServiceProvider для подключения собственного фасада
    public function store(Request $request){
        if (view()->exists('default.contact')) {

//            $saveStr->save($request, Auth::user());
//            return redirect()->route('contact');
//            dd(Lang::$app);

            SaveStr::save($request, Auth::user());   //обращение к созданному ФАСАДУ и вызов из СЕРВИС КОНТЕЙНЕРА необходимую реализацию

            return view('default.contact',['title'=>'Contacts']);

        }
    }
/////////////////////////////////////////////////////////////////////////////


    public function show2(){

        return view('default.contact',['title'=>'Contacts']);

    }







}