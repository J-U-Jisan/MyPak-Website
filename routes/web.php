<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function() {
    return view('login');
});


Route::group(['prefix'  =>  'admin'], function () {
    Route::post('/', function(){
        if(isset($_POST['submit'])){

            $username= 'admin';                   //your username
            $password = 'password';                 //your password

            if($username==$_POST['user'] && $password==$_POST['password']){
                Session::put('user', $username);
                return view('admin.admin');
            }
        }
        return redirect('/login');
    });

    Route::get('/', 'loginController@admin');

    Route::post('/news','NewsController@store');
    Route::get('/news', 'NewsController@news');
    Route::delete('/news', 'NewsController@delete');
    Route::post('/career','CareerController@store');
    Route::get('/career', 'CareerController@career');
    Route::delete('/career', 'CareerController@delete');
    Route::get('/contact', function(){
        return view('admin.contact');
    });
    Route::delete('/contact','loginController@delete_contact');
});

Route::get('/logout', 'loginController@logout');

Route::get('/about', function() {
    return view('about');
});
Route::get('/product', function() {
    return view('product');
});
Route::get('/customer', function() {
    return view('customer');
});
Route::get('/news', function() {
    return view('news');
});
Route::get('/career', function() {
    return view('career');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::post('/contact', 'loginController@store_contact');
