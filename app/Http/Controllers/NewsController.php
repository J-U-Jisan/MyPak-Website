<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function store()
    {
        $attribute = request()->validate([
            'title' => 'required',
            'news' => 'required',
        ]);
        News::create([
            'title' => $attribute['title'],
            'body' => $attribute['news'],
            'created_at' => now(),
        ]);
        return redirect('/admin/news');
    }

    public function news()
    {
        if(Session::get('user') != ''){
            return view('admin.news',[
                'datas' => News::all(),
            ]);
        }
        else{
            return redirect('/login');
        }
    }
    public function delete()
    {
        News::destroy(request()->input('delete'));
        return redirect('/admin/news');
    }
}
