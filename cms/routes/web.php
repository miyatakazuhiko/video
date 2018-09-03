<?php
//topページ
Route::get('/', function () {
    return view('index');
});

//ユーザー情報
Route::get('/users','UsersController@index');

//クリエイター登録/表示
Route::get('/creators','CreatorsController@index');

Route::post('/creators_login_add','CreatorsController@login_check');

//クリエイター登録：受け取り先
Route::post('/creators_add','CreatorsController@creators_add');


//動画アップロード
Route::get('/video','VideosController@index');

//動画表示
Route::get('/video_view','VideosController@view');

//動画アップロード受け取り先
Route::post('/video_add','VideosController@video_add');


//出品動画管理画面
Route::get('/video_info', 'VideosController@video_info');

//出品動画更新画面
Route::get('/video_edit/{video_id}', 'VideosController@edit');

//出品動画更新処理
Route::post('/video_update', 'VideosController@update');

//出品動画削除画面（動画は残すため、削除ではなく管理フラグで管理）
Route::post('/video_delete/{video_id}', 'VideosController@destroy');

//出品動画削除処理
Route::post('/video_destroy_execution', 'VideosController@destroy_execution');

//クリエイター・動画検索画面
Route::get('/search', 'SearchsController@index');

//クリエイター検索結果処理
Route::post('/search_creator', 'SearchsController@creator');

//動画検索結果処理
Route::post('/search_video', 'SearchsController@video');


//マイページ
Route::get('/mypage', 'MypagesController@index');

    //ユーザー情報更新画面
    Route::get('/mypage_user_edit', 'MypagesController@user_edit');

    //ユーザー情報更新処理
    Route::post('/mypage_user_update', 'MypagesController@user_update');
    
    //クリエイター情報更新画面
    Route::get('/mypage_creator_edit', 'MypagesController@creator_edit');
    
    //クリエイター情報更新処理
    Route::post('/mypage_creator_update', 'MypagesController@creator_update');

//ログイン
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aaa', 'VideosController@aaa')->middleware('auth');