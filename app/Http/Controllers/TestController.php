<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\article;

class TestController extends Controller
{
   
    public function view($id){
        
        //dd($id);
        $article= article::find($id);
        //cuando hay varios elementos debe recorrerlo
        //$article->each(function($article){}
        //como solo tenemos un elemento
        $article->category;
        $article->User;
        $article->tag;
        
                
        // dd($article);
        return view('test.index',['article'=>$article]);
    }
   /* public function index()
    {
        //
        $article= article::find($id);
        $article->category;
        $article->user;
        $article->tags;
        
        dd($article);
    }*/

    
}
