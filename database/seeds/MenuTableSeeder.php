<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            ['name' => '主页','url'  => 'index','icon' => 'home','order'=>'1'],
            ['name' => '展示','url'  => 'album','icon' => 'picture','order'=>'2'],
            ['name' => '详情','url'  => 'blog','icon' => 'tags','order'=>'3'],
            ['name' => '样式','url'  => 'typo','icon' => 'calendar','order'=>'4']
        ]);
    }
}
