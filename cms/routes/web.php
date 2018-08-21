<?php
//topページ
Route::get('/', function () {
    return view('index');
});

//ユーザー情報
Route::get('/users','UsersController@index');

//クリエイター登録/表示
Route::get('/creators','CreatorsController@index');

//クリエイター登録：受け取り先
Route::post('/creators_add','CreatorsController@creators_add');


//動画アップロード/表示
Route::get('/video','VideosController@index');

//動画アップロード受け取り先
Route::post('/video_add','VideosController@video_add');


//ログイン
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

