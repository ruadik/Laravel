<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;


class Core extends Controller
{

//    protected static $articles;


    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

//    public static function addArticles($array){
//        return self::$articles[]=$array;
//    }

    //list materials
    public function getArticles(){

        //        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->first();
//        $articles = DB::table('articles')->value('name');

//        DB::table('articles')->chunk(2,function ($articles) {
//            foreach ($articles as $article){
//                Core::addArticles($article);
//            }
//        });
//        dump(self::$articles);
//        dump($articles);

        ///////////////////
//        DB::table('articles')->orderBy('id')->chunk(2, function ($articles) {
//            foreach ($articles as $article) {
//                //
////                print_r($article);
//            }
//        });

        //////////////////

//        $articles = DB::table('articles')->pluck('name');
//        $articles = DB::table('articles')->count();
//        $articles = DB::table('articles')->max('id');
//        $articles = DB::table('articles')->select('name','id','text')->get();
//        $articles = DB::table('articles')->distinct()->select('name')->get();
//        $query = DB::table('articles')->select('name');
        ////

        ////
        /// WHERE
//        $articles = $query->addSelect('text AS fullText')->get();

        //   WHERE id = 5 OR
//        $articles = DB::table('articles')->select('name as FullText')
//                                                        ->where('id', '<',3)
//                                                        ->where('name', 'like', 'blog%', 'or')
//                                                        ->get();

        //   WHERE id = 5 OR
//        $articles = DB::table('articles')->select('name as FullText')
//                                                        ->where([
//                                                                ['id', '<',3],
//                                                                ['name', 'like', 'blog%', 'or']
//                                                                ])
//                                                        ->get();

        //   WHERE id = 5 OR
//                $articles = DB::table('articles')->select('name as FullText')
//                                                        ->where('id', '<',3)
//                                                        ->orWhere('name', 'like', 'blog%')
//                                                        ->get();

        // WHERE id between 1 and 5
//        $articles = DB::table('articles')->whereBetween('id',[2,4])->get();
//        $articles = DB::table('articles')->whereNotBetween('id',[2,4])->get();
//        $articles = DB::table('articles')->whereIn('id',[1,2,3,4])->get();
//        $articles = DB::table('articles')->whereNotIn('id',[1,2,3,4])->get();
//        $articles = DB::table('articles')->groupBy('id')->get();


        //limit
//        $articles = DB::table('articles')->take(3)->get();
//        $articles = DB::table('articles')->take(3)->skip(2)->get();


        //INSERT
//            DB::table('articles')->insert([
//                                            ['name'=>'test', 'text'=>'Hello', 'img'=>''],
//                                            ['name'=>'test2', 'text'=>'Hello World2', 'img'=>'pic44.jpg'],
//                                            ['name'=>'test', 'text'=>'Hello3', 'img'=>''],
//                                            ['name'=>'test2', 'text'=>'Hello World4', 'img'=>'pic44.jpg']
//                                          ]);


//        $result = DB::table('articles')->insertGetId(['name'=>'test', 'text'=>'Hello', 'img'=>'']);
//        dump($result);


        // WHERE id = 22
//        $result = DB::table('articles')->where('id', 5)->update(['name'=>'Updated name']);
//        $result = DB::table('articles')->where('id', 5)->delete();
//        var_dump($result);

        //LEFT JOIN 'articles' ON user.id = articles.id
//        $user = DB::table('user')
//            ->leftJoin('articles', 'user.id', '=', 'articles.id')
//            ->get();



//        DB::table('articles')->increment('name', 5);
//        DB::table('articles')->decrement('name', 5);

//        $articles = DB::table('articles')->select()->get();
//        foreach ($articles as $article) {
////            echo $article;
//        }
//        dump($articles);

        //////////////////





//        $array = array(
//
//            'title'=>'This is "Articles" blade layouts',
//            'data' =>[
//                'one' => 'List 1',
//                'two' => 'List 2',
//                'three' => 'List 3',
//                'four' => 'List 4',
//                'five' => 'List 5'
//            ],
//            'dataI' =>['List 1','List 2','List 3','List 4','List 5'],
//
//            'bvar' => false,
//            'script' =>"<script>alert('hello')</script>"
//
//        );

        //echo "материалы articles";
//        if(view()->exists('default.articles')){
//            $view = view('default.articles', $array);
//            echo $view;
//            return;
//        }




















//        $articles = Article::all();

//        foreach ($articles as $article){
//            echo $article->text."</br>";
//        }

//        $articles = Article::where('id', '>', 5)->orderBy('name')->take(2)->get();


//        dump($articles);
//        return;


//        Article::chunk(2, function ($articles){
//            foreach ($articles as $article){
//                dump($article);
//            }
//        });

//        $article = Article::find(1);
//        $article = Article::where('id', 4)->first();

//        $article = Article::find([1,2,3]);


//        $article = Article::findOrFail(100);
//        $article = Article::where('id',100)->firstOrFail();

//        $article = new Article();
//        $article -> name = 'New Article Name';
//        $article -> text = 'New Article Text';
//        $article -> img = '';
//        $article->save();

//        $article = Article::find(12);
//        $article -> name = 'New Article Name1';
//        $article -> text = 'New Article Text1';
//        $article -> img = 'New Article IMG1';
//        $article->save();

//        $article = Article::where('name', 'test')
//                            ->update(
//                                    ['name'=>'test'],
//                                    ['text'=>'Update'],
//                                    ['img'=>'Update']
//                                    );



//        Article::create([
//                        'name'=>'CREATE',
//                        'text'=>'SOME TEXT',
//                        'img'=>'some image'
//                        ]);


//       $article = Article::firstOrCreate([
//
//                                'name'=>'Hello world1',
//                                'text'=>'Some Text',
//                                'img'=>''
//
//                                ]);

//        $article = Article::firstOrNew([
//
//                            'name'=>'Hello world2',
//                            'text'=>'some text'
//
//                            ]);
//        $article->save();



//        $article = Article::find(17);
//        $article->Delete();

//        Article::destroy(['18','19']);
//        Article::where('name','=','CREATE')->delete();



//        $article = Article::find(8);
//        $article->delete();



//        $articles = Article::withTrashed()->get();
//        foreach ($articles as $article){
//            if($article->trashed()){
//                echo $article->id."Удалена <br/>";
//            }else{
//                echo $article->id."Не удалена<br/>";
//            }
//        }


//        $article = Article::withTrashed()
//                        ->where('id',8)
//                        ->restore();
//        dump($article);

//        $articles = Article::withTrashed()->restore();

//        $articles = Article::find(16);
//        if($articles->forceDelete()){
//            echo $articles->id."Удалена";
//        }

//        dump($articles);



//        $articles = Article::all();
//        echo $article->text;









//        $user = User::find(1);
//        $country = $user->country;
//        dump($country);


//        $country = Country::find(1);
//        $user = $country->user;
//        dump($user);

//        $user = User::find(1);
//        $articles = $user->articles;

//        foreach ($articles as $article){
//            echo $article->name."</br>";
//        }

//        $user = User::find(1);
//        $articles = $user->articles()->where('id','>',2)->get();
//        dump($articles);


//        $articles = Article::find(3);
//        dump($articles->user->name);


//        $user = User::find(1);
//        foreach ($user->roles as $role){
//           echo  $role->name."</br>";
//        }
//        dump($user->roles);


//        $user = User::find(1);
//        $role = $user->roles()->where('roles.id',2)->first();
//        dump($role);

//        $role = Role::find(1);
//        $user = $role->users();
////        $user = $role->users();
//        dump($user);




//    $country = Country::find(1);
////    $user = $country->user;
//    dump($country);



//       Жадная загрузка, сокращает количество запросов

//    $articles = Article::all();
//    $articles = Article::with('user')->get();
//
//    foreach ($articles as $article){
//        echo $article->user->name;
//    }







//    $articles = Article::all();
////    Какой то код
//
//
////    Какой то код
//
//        $articles->load('user');
//
//        foreach ($articles as $article){
//            echo $article->user->name;
//        }
////    dump($articles);






//       Жадная загрузка, при вызове связанных таблиц
//        $users = User::all();
//        foreach ($users as $user){
////            echo $user;
//            dump($user->roles);
//        }



//        $users = User::with('articles', 'roles')->get();
//        foreach ($users as $user){
////            echo $user;
//            dump($user->articles);
//        }


//        $users = User::has('articles')->get();    //Дай мне только тех пользователей у которых есть записи в табл articles
//        $users = User::has('articles','=<',3)->get();  //дай мне только тех пользователей у которых 3 и более записей в табл articles
//        foreach ($users as $user){
//            dump($user);
//        }





//        Добавление и редактирование данных котор связаны между собой
//        $user = User::find(1);
//
//        $article = new Article([
//                                'name'=>'New name',
//                                'text'=>'New some text',
//                                'img'=>''
//        ]);
//
//
//        $user -> articles() -> save($article);
//
//        $articles = Article::all();
//        dump($articles);






//        $user = User::find(1);
//
//        $user -> articles() -> create([
//                                        'name'=>'New name',
//                                        'text'=>'New some text',
//                                        'img'=>''
//                                        ]);
//
//        $articles = Article::all();
//        dump($articles);




//        $user = User::find(1);
//
//        $user -> articles() -> saveMany([
//                                        new Article(['name'=>'New name1', 'text'=>'New some text1', 'img'=>'1.jpg']),
//                                        new Article(['name'=>'New name2', 'text'=>'New some text2', 'img'=>'2.jpg']),
//                                        new Article(['name'=>'New name3', 'text'=>'New some text3', 'img'=>'3.jpg'])
//                                        ]);
//
//        $articles = Article::all();
//        dump($articles);



//        $user = User::find(1);
//        $role = new Role(['name'=>'gust']);
//
//        $user->roles()->save($role);
//
//        $roles = Role::all();
//        dump($roles);







//        $user = User::find(1);
//        $user->articles()->where('id',13)->update(['name'=>'Update name']);
//
//        $article = Article::find(13);
//        dump($article);








//        Управление связанными таблицами, изменение добавленной информации
//        $country = Country::find(1);
//        $user = User::find(2);
//
//        $country ->user()->associate($user)->save();



//        $articles = Article::all();
//        $user = User::find(2);
//
//        foreach ($articles as $article){
//            $article->user()->associate($user)->save();
//        }


//        добавление роли много связным таблицам т.е. изменение инфы в связующей таблице
//        $user = User::find(2);
//        $role_id = Role::find(3)->id;
//
//        $user->roles()->attach($role_id);
////        $user->roles()->detach($role_id);
//
//        dump($role_id);








//        Метод читателей (get) геттер
//        $article = Article::find(13);
//        echo $article->name;

//        $user = User::find(2);
//        echo $user->name;


//        Метод преоброзаватель (set) сеттер
//        $article = Article::find(13);
//        $article->name='Update name new';
//        echo $article->name;


//        $user = User::find(2);
//        $user->name='Set name in USER';
//        echo $user->name    ;





//        Преобразует параметры значения при вызове из БД
//        $article = Article::find(13);
//        echo $article->text;


//        $article = Article::find(12);
//        $arr = ['key'=>'hello'];
//        $article->text = $arr;
//        $article->save();
//
//        dump($article->text);


//        Приобразование моделей
//        $article = Article::find(12);
//        dump($article->toArray());
//        dump($article->toJson());
//        dump((string)$article);

















return;
    }

    //material
    public function getArticle($id){
        echo "Ответ для article: - ";
        echo $id;
    }
}
