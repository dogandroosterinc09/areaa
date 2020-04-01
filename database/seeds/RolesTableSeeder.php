<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Customer',
                'guard_name' => 'web',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Chapter Admin',
                'guard_name' => 'web',
                'created_at' => '2020-03-31 22:29:41',
                'updated_at' => '2020-03-31 22:29:41',
            ),
        ));
        
        
    }
}