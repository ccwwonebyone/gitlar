<?php

use Illuminate\Database\Seeder;

class WebTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('web')->delete();
        
        \DB::table('web')->insert(array (
            0 => 
            array (
                'id' => 1,
                'web_type' => 'music',
            ),
            1 => 
            array (
                'id' => 2,
                'web_type' => '科技',
            ),
        ));
        
        
    }
}
