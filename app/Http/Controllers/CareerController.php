<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CareerController extends Controller
{
    public function store()
    {
        $attribute = request()->validate([
            'title' => 'required',
            'career' => 'required',
        ]);
        Career::create([
            'title' => $attribute['title'],
            'created_at' => now(),
            'body' => $attribute['career'],
        ]);
        return redirect('/admin/career');
    }

    public function career()
    {
        if(Session::get('user') != ''){
            return view('admin.career',[
                'datas' => Career::all(),
            ]);
        }
        else{
            return redirect('/login');
        }
    }
    public function delete()
    {
        Career::destroy(request()->input('delete'));
        return redirect('/admin/career');
    }
}
