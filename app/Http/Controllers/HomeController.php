<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Check_list;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //


    public function home() {
        $finds = Article::find([1,2,11,12,13,14]);
        if(view()->exists('home')) {
            return view('home', ['finds' => $finds, 'title' => 'Главная']);
        }
        abort(404);
    }

    public function contact() {
        $categories = Category::all();
        if(view()->exists('page_contact')) {
            return view('page_contact', ['categories' => $categories, 'title' => 'Контакты']);
        }
        abort(404);
    }

    public function checkList(Request $request) {

        $request->validate([
            'name' => 'required|string|max:55',
            'surname'=>'required|string|max:55',
            'email' => 'required|string|email|max:25|unique:check_lists'
        ]);
        $list = new Check_list();
        $list->name = $request->name;
        $list->surname = $request->surname;
        $list->email = $request->email;
        $list->save();

        return Storage::download('\public\hair.pdf');    
    }
}
