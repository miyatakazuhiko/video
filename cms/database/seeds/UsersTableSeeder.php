<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
                'firstname' => 'さくら',
                'lastname' => 'キョウコ',
                'email' => 'suzunaridepon@hotmail.co.jp',
                'password' => bcrypt('123123'),
                'postal_code' => '1111111',
                'address' => '新宿区下落合',
                'tel' => '00011114444',
                'organization' => 'ジーズアカデミー',
        ];
        DB::table('users')->insert($param);
        
        $param = [
                'firstname' => 'サクラ',
                'lastname' => 'キョウコ',
                'email' => 'sakura@co.jp',
                'password' => bcrypt('456456'),
                'postal_code' => '2221111',
                'address' => '見滝原',
                'tel' => '55511114444',
                'organization' => 'フリー',
        ];
        DB::table('users')->insert($param);
    }
}
