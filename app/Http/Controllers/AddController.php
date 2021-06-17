<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class AddController extends Controller
{
    //
    public function addPost(Request $request)
    {
        $categories = Category::orderBy('id')->get();
        if ($request->isMethod('post')){

            $input = $request->except('_token');
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/img', $input['image']);

            $post = new Article();
            $post->name = $request->title;
            $post->category_id = $request->select;
            $post->img = $file->getClientOriginalName();
            $post->desc = $request->excerpt;
            $post->text = $request->body;
            $post->save();
            return view('admin.add_post', ['categories' => $categories, 'title' => 'Новая статья']);
        } 
        else return view('admin.add_post', ['categories' => $categories, 'title' => 'Новая статья']);
    }

    public function editPost(Request $request, $id)
    {
        $categories = Category::orderBy('id')->get();
        if ($request->isMethod('get')) {
            $post = Article::find($id);
            return view('admin.edit_post', ['post'=>$post, 'categories' => $categories, 'title' => 'Редактировать статью']);
        }
        elseif ($request->isMethod('post')) {

            $input = $request->except('_token');
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/img', $input['image']);

            $post = Article::find($id);
            $post->name = $request->title;
            $post->category_id = $request->select;
            $post->img = $file->getClientOriginalName();
            $post->desc = $request->excerpt;
            $post->text = $request->body;
            $post->save();
            return view('admin.edit_post', ['post'=>$post, 'categories' => $categories, 'title' => 'Редактировать статью']);
        }
    }

    public function delPost($id)
    {
        $post = Article::find($id);
        $post->delete();
        return redirect('admin');
    }
}
