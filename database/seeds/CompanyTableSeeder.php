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
                'id' => 1,
                'name' => 'GITLAR',
                'tel' => '13824382438',
                'address' => '伤年街',
                'qq' => '1438438',
                'weixin' => '二的不一般',
                'sina' => '想你所想',
                'belong' => 'づsんáηɡ年、悤悤惘惘',
                'create_time' => '2016-09-14',
                'recommend' => '最美的不过是你想的',
                'background' => 'images/2016101301430114122510166557.jpg',
                'web' => '1',
            ),
        ));
        
        
    }
}
