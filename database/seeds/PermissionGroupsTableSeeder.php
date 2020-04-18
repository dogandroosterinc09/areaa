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
            16 => 
            array (
                'id' => 17,
                'name' => 'Chapter Events',
                'created_at' => '2020-04-03 17:13:15',
                'updated_at' => '2020-04-03 17:13:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Chapter Board Members',
                'created_at' => '2020-04-07 17:18:37',
                'updated_at' => '2020-04-15 21:14:49',
                'deleted_at' => '2020-04-15 21:14:49',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Chapter Board Members',
                'created_at' => '2020-04-07 17:22:12',
                'updated_at' => '2020-04-07 17:22:12',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Media Categories',
                'created_at' => '2020-04-09 20:17:10',
                'updated_at' => '2020-04-09 20:17:10',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Media',
                'created_at' => '2020-04-09 20:47:11',
                'updated_at' => '2020-04-09 20:47:11',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Chapter Logos',
                'created_at' => '2020-04-13 17:17:56',
                'updated_at' => '2020-04-13 17:17:56',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Chapter Page About Us',
                'created_at' => '2020-04-15 21:07:19',
                'updated_at' => '2020-04-15 21:08:34',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Chapter Page Events',
                'created_at' => '2020-04-16 16:27:48',
                'updated_at' => '2020-04-16 16:27:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}