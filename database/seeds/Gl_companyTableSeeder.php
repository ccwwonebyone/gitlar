<?php

/**
 * Antvel - Seeder
 * Comments Table.
 *
 * @author  Gustavo Ocanto <gustavoocanto@gmail.com>
 */
use Illuminate\Database\Seeder;

class Gl_companyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('company')->insert([
            'name' => '最美不过你',
            'create_time' => date('Y-m-d'),
        ]);
    }
}