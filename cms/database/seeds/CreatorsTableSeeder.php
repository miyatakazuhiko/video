<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatorsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
                'creator_name' => 'sakura_roll',
                'birthday' => '0824',
                'gender' => '男',
                'twitter' => '内緒',
                'instagram' => 'やってない',
            ];
        DB::table('creators')->insert($param);
        
        $param = [
                'creator_name' => 'homuhomu',
                'birthday' => '0224',
                'gender' => '女',
                'twitter' => 'やってない',
                'instagram' => 'ｱﾚ',
            ];
        DB::table('creators')->insert($param);
    }
}
