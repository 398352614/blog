<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




 Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "home";
});


Route::get('/test1/{id}',function ($id) {
    echo $id;
})   ->name('zhangsan');

route::group(['prefix' => 'admin'],function(){
    route::get('student',function(){
        echo "who";
    });
});

route::get('/test3',function(){
    echo "?";
});

route::get('/count1','Count1Controller@count1');

route::get('/count2','Count2Controller@count2');

route::get('/233','admin\a233Controller@a233');





