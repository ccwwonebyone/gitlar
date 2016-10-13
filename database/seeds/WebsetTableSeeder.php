<?php

use Illuminate\Database\Seeder;

class WebsetTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('webset')->delete();
        
        \DB::table('webset')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu-belong' => 5,
                'menu-header' => '心灵配置,公司简介',
                'menu-middle' => '滑块配置,项目管理',
                'menu-footer' => '精彩配置,最优的选择',
                'background' => 'images/webset/5/2016101302460514122510166557.jpg,',
            ),
            1 => 
            array (
                'id' => 2,
                'menu-belong' => 6,
                'menu-header' => '滑块配置,sdsa',
                'menu-middle' => '滑块配置,精彩展示',
                'menu-footer' => '滑块配置,asd',
                'background' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu-belong' => 7,
                'menu-header' => '精彩配置,asaa',
                'menu-middle' => '滑块配置,拥有的美好',
                'menu-footer' => '精彩配置,ddddd',
                'background' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu-belong' => 8,
                'menu-header' => NULL,
                'menu-middle' => NULL,
                'menu-footer' => NULL,
                'background' => NULL,
            ),
        ));
        
        
    }
}
