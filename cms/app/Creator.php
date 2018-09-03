<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    
    public $incrementing = false;
    protected $primaryKey = "creator_id";
    
    // 下記は恐らくcontrollerに描く記述をこっちに描いてる？現状ここの表記いらないが
    // creators.bladeのほうでコメントアウトしてるところで変数を使用しているため
    // ないとｴﾗｰになる。
    public function getCreator_info(){
        return 'クリエイターID：'.$this->creator_name
                .'誕生日：'. $this->birthday
                .'性別：'. $this->gender;
    }
    
    public function user_id()
    {
        return $this->hasOne('App\User', 'id', 'creator_id');
    }
    
    public function video_id()
    {
        return $this->hasMany('App\Video', 'creator_id', 'creator_id');
        //第二引数が引っ張ってきたいやつ。
    }
}