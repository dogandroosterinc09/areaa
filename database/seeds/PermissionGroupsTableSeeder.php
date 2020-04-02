<?php

use Illuminate\Database\Seeder;

class PermissionGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_groups')->delete();
        
        \DB::table('permission_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Roles',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Permissions',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Permission Groups',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'System Settings',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Pages',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Home Slides',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Contacts',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Board Members',
                'created_at' => '2020-02-18 16:01:59',
                'updated_at' => '2020-02-18 16:01:59',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Faqs',
                'created_at' => '2020-02-21 18:18:58',
                'updated_at' => '2020-02-21 18:18:58',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Galleries',
                'created_at' => '2020-02-21 19:05:56',
                'updated_at' => '2020-02-21 19:05:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Events',
                'created_at' => '2020-02-25 16:43:13',
                'updated_at' => '2020-02-25 16:43:13',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Chapters',
                'created_at' => '2020-02-25 17:09:07',
                'updated_at' => '2020-02-25 17:09:07',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Benefits',
                'created_at' => '2020-03-18 16:56:12',
                'updated_at' => '2020-03-18 16:56:12',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Webinars',
                'created_at' => '2020-03-25 17:21:12',
                'updated_at' => '2020-03-25 17:21:12',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Chapter Homes',
                'created_at' => '2020-04-01 18:12:00',
                'updated_at' => '2020-04-01 18:12:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}