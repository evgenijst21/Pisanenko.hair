<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class BlogController extends Controller
{
    //

    public function blog() {
        
        
        $articles = Article::orderBy('id', 'desc')->paginate(4);
        $categories = Category::all();
        if(view()->exists('blog')) {
            return view('blog', ['articles' => $articles, 'categories' => $categories, 'title' => 'Блог']);
        }
        abort(404);
        
    }

    public function single($id) {
        $find = Article::find($id);
        $categories = Category::all();
        if(view()->exists('blog_single')) {
            return view('blog_single', ['find' => $find, 'categories' => $categories, 'title' => $find['name']]);
        }
        abort(404);
    }

    public function category($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $articles = $category->article;
        
        if(view()->exists('category_post')) {
            return view('category_post', ['category' => $category, 'articles' => $articles, 'categories' => $categories, 'title' => $category['category_name']]);
        }
        abort(404); 
        
    }
    
}
