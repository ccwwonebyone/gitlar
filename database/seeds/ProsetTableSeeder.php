<?php

use Illuminate\Database\Seeder;

class ProsetTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proset')->delete();
        
        \DB::table('proset')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '滑块配置',
                'url' => 'slider',
                'is_show' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '精彩配置',
                'url' => 'wonder',
                'is_show' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => '心灵配置',
                'url' => 'soul',
                'is_show' => 1,
            ),
        ));
        
        
    }
}
