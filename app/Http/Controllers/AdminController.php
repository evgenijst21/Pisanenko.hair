<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Check_list;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function AllPosts() 
    {
        $posts = Article::orderBy('id')->paginate(10);
        if (view()->exists('admin.admin_home')){
            return view('admin.admin_home', ['posts' => $posts, 'count' => Article::count(), 'title' => 'Все статьи']);
        }
        abort(404);
    }

    public function downloadCheck()
    {
        
        $checks = Check_list::orderBy('name')->paginate(10);
        if (view()->exists('admin.download')){
            return view('admin.download', ['checks' => $checks, 'count' => Article::count(), 'countList' => Check_list::count(), 'title' => 'Скачивания чек-листа']);
        }
        abort(404);
    }
}
