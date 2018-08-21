<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    public function getCreator_info(){
        return 'クリエイターID：'.$this->creator_name
                .'誕生日：'. $this->birthday
                .'性別：'. $this->gender;
    }
}