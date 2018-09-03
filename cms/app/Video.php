<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    public $incrementing = false;
    protected $primaryKey = "video_id";
    
    public function creator_id()
    {
        return $this->hasMany('App\Creator', 'creator_id', 'video_id');
    }
}