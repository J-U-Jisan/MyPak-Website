<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function admin()
    {
        if(Session::get('user') != ''){
            return view('admin.admin');
        }
        else{
            return redirect('/login');
        }
    }

    public function logout()
    {
        Session::put('user', '');
        return redirect('/login');
    }

    public function store_contact()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        DB::insert('insert into contact(username,email,subject,message) values (?,?,?,?)',[$username,$email,$subject,$message]);
        return view('contact');
    }
    public function delete_contact()
    {
        $id = $_POST['delete'];

        DB::delete('Delete from contact where id = ?',[$id]);

        return redirect('/admin/contact');
    }
}

