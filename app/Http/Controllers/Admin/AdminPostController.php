<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Events\onAddArticleEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Gate;
use Event;

class AdminPostController extends Controller
{
    //show Form
    public function show() {
        return view('default.add_post', ['title' => 'Новый материал']);
    }

    //new post
    public function create(Request $request) {

        $article = new Article;
//        if(Gate::denies('add-article')) {   // при использованиее Gate (Шлюзов)
//        if(Gate::denies('add', $article)) {   // при использованиее Policy (Политик)
//            return redirect()->back()->with(['message'=>'У Вас нет прав']);
//        }

        if($request->user()->cannot('add', $article)) {
            return redirect()->back()->with(['message'=>'У Вас нет прав']);
        }


        $this->validate($request,[
            'name'=>'required'
        ]);

        $user = Auth::user();
        $data = $request->all();

        $res = $user->articles()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text']
        ]);

//        Event::fire(new onAddArticleEvent($res, $user));  //не работает
        event(new onAddArticleEvent($res, $user));      //работает

        return redirect()->back()->with('message','Материал добавлен');

    }
}
