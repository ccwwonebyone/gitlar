<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user')->delete();
        
        \DB::table('user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'gitlar',
                'password' => '37bc3c2b4847a742eb97d88333cc1f8d',
            ),
        ));
        
        
    }
}
