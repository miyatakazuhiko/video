<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Creator;

class User extends Authenticatable
{
    use Notifiable;

    /**
         * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'postal_code',
        'address', 'tel', 'organization',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //1:1 クリエイター登録情報と紐付けCreator::classどっち？
    public function creator_id()
    {
        return $this->hasOne('App\Creator', 'creator_id', 'id');
        //第二引数が引っ張ってきたいやつ。
    }
    
    
}
