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
        $this->call('ProvinceTableSeeder');
        $this->call('CityTableSeeder');
        $this->call('DistrictTableSeeder');
        $this->call('CompanyTableSeeder');
        $this->call('ProjectTableSeeder');
        $this->call('ProsetTableSeeder');
        $this->call('WebsetTableSeeder');
        $this->call('WebTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('DreamTableSeeder');
        $this->call('ContactTableSeeder');
    }
}
