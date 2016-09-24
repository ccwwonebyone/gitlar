<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu')->delete();
        
        \DB::table('menu')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => '主页',
                'url' => 'index',
                'icon' => 'home',
                'order' => 1,
                'belong' => 1,
                'table' => NULL,
                'pid' => 0,
                'is_show' => 1,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => '展示',
                'url' => 'album',
                'icon' => 'picture',
                'order' => 2,
                'belong' => 1,
                'table' => NULL,
                'pid' => 0,
                'is_show' => 1,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => '详情',
                'url' => 'blog',
                'icon' => 'tags',
                'order' => 3,
                'belong' => 1,
                'table' => NULL,
                'pid' => 0,
                'is_show' => 1,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => '样式',
                'url' => 'typo',
                'icon' => 'calendar',
                'order' => 4,
                'belong' => 1,
                'table' => NULL,
                'pid' => 0,
                'is_show' => 1,
            ),
            4 => 
            array (
                'id' => 29,
                'name' => '后台首页',
                'url' => 'home',
                'icon' => 'dashboard',
                'order' => 1,
                'belong' => 0,
                'table' => NULL,
                'pid' => 0,
                'is_show' => 1,
            ),
            5 => 
            array (
                'id' => 39,
                'name' => '菜单管理',
                'url' => 'menu',
                'icon' => 'list-alt',
                'order' => 5,
                'belong' => 0,
                'table' => '',
                'pid' => 0,
                'is_show' => 1,
            ),
            6 => 
            array (
                'id' => 35,
                'name' => '前端配置',
                'url' => 'webset',
                'icon' => 'cog',
                'order' => 2,
                'belong' => 0,
                'table' => NULL,
                'pid' => 0,
                'is_show' => 1,
            ),
            7 => 
            array (
                'id' => 36,
                'name' => '公司信息',
                'url' => 'company',
                'icon' => 'chevron-right',
                'order' => 3,
                'belong' => 0,
                'table' => 'company',
                'pid' => 0,
                'is_show' => 1,
            ),
            8 => 
            array (
                'id' => 34,
                'name' => '滑块管理',
                'url' => 'slider',
                'icon' => 'film',
                'order' => 6,
                'belong' => 0,
                'table' => 'project',
                'pid' => 0,
                'is_show' => 1,
            ),
            9 => 
            array (
                'id' => 28,
                'name' => '精彩配置',
                'url' => 'wonder',
                'icon' => 'film',
                'order' => 7,
                'belong' => 0,
                'table' => 'project',
                'pid' => 0,
                'is_show' => 1,
            ),
            10 => 
            array (
                'id' => 40,
                'name' => '图表管理',
                'url' => 'charts',
                'icon' => 'stats',
                'order' => 7,
                'belong' => 0,
                'table' => '',
                'pid' => 0,
                'is_show' => 1,
            ),
            11 => 
            array (
                'id' => 37,
                'name' => '面板管理',
                'url' => 'panels',
                'icon' => 'info-sign',
                'order' => 9,
                'belong' => 0,
                'table' => '',
                'pid' => 0,
                'is_show' => 1,
            ),
            12 => 
            array (
                'id' => 41,
                'name' => '装饰管理',
                'url' => 'widgets',
                'icon' => 'th',
                'order' => 10,
                'belong' => 0,
                'table' => '',
                'pid' => 0,
                'is_show' => 1,
            ),
        ));
        
        
    }
}
