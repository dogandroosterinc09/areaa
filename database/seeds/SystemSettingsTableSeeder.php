<?php

use Illuminate\Database\Seeder;

class SystemSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_settings')->delete();
        
        \DB::table('system_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'SS0001',
                'name' => 'Website Name',
                'type' => 'input',
                'value' => 'Dog and Rooster',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'SS0002',
                'name' => 'Website Email',
                'type' => 'input',
                'value' => 'test1@dogandrooster.net',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'SS0003',
                'name' => 'Website Phone',
                'type' => 'input',
                'value' => '858 677 9931',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'SS0004',
                'name' => 'Website Address',
                'type' => 'textarea',
                'value' => '5755 Oberlin Dr #106, San Diego, CA 92121, USA',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'SS0005',
                'name' => 'Default Meta Title',
                'type' => 'input',
                'value' => 'Default Meta Title',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'SS0006',
                'name' => 'Default Meta Keywords',
                'type' => 'input',
                'value' => 'Default Meta Keywords',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'SS0007',
                'name' => 'Default Meta Description',
                'type' => 'textarea',
                'value' => 'Dog and Rooster Website. ACL Integrated (Access Control List).',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 13:14:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}