<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company')->delete();
        
        \DB::table('company')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => '最美不过你',
                'address' => '伤年',
                'belong' => 'づsんáηɡ年、悤悤惘惘',
                'create_time' => '2016-09-14',
                'recommend' => '最美的不过是你想的',
                'background' => 'images/20161130070740background295368.jpg',
                'web' => '1',
            ),
        ));
        
        
    }
}
