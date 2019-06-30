<?php

namespace App\Providers;

use App\Article;
use App\Policies\ArticlePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Article::class=>ArticlePolicy::class,
];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

///////////////////Условия для добавления ////////////////
////      $gate = Gate::define(add-article, ClassName@func);   ///Можно условие прописывать в контроллерах
//        $gate = Gate::define('add-article', function (User $user){
//
//            foreach ($user->roles as $role) {
//                if($role->name == 'Admin') {
//                    return TRUE;
//                }
//            }
//            return FALSE;
//        });
///////////////////////////////////////////////////////////
//
//
/////////////////////Условия для обновления ////////////////
//        $gate = Gate::define('update-article', function (User $user, $article){
//
//            foreach ($user->roles as $role) {
//                if($role->name == 'Admin') {
//                    if($user->id == $article->user_id){
//                        return TRUE;
//                    }
//                }
//            }
//            return FALSE;
//        });
//////////////////////////////////////////////////////////

    }
}
