<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$this->call('MenuTableSeeder');
        $this->call('Gl_companyTableSeeder');        
        $this->call('ProvinceTableSeeder');
        $this->call('CityTableSeeder');
        $this->call('DistrictTableSeeder');
    }
}
