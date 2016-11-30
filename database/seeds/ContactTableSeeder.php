<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact')->delete();
        
        \DB::table('contact')->insert(array (
            0 => 
            array (
                'id' => 2,
                'type' => 'QQ',
                'content' => '54621351',
                'img' => 'images/contact//20161130024122295091.jpg',
                'icon' => '29',
            ),
        ));
        
        
    }
}
