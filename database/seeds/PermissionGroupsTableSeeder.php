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
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Permissions',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Permission Groups',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'System Settings',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Pages',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Home Slides',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Contacts',
                'created_at' => '2019-10-05 06:04:34',
                'updated_at' => '2019-10-05 06:04:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Board Members',
                'created_at' => '2020-02-19 00:01:59',
                'updated_at' => '2020-02-19 00:01:59',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Faqs',
                'created_at' => '2020-02-22 02:18:58',
                'updated_at' => '2020-02-22 02:18:58',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Galleries',
                'created_at' => '2020-02-22 03:05:56',
                'updated_at' => '2020-02-22 03:05:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Events',
                'created_at' => '2020-02-26 00:43:13',
                'updated_at' => '2020-02-26 00:43:13',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Chapters',
                'created_at' => '2020-02-26 01:09:07',
                'updated_at' => '2020-02-26 01:09:07',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Benefits',
                'created_at' => '2020-03-19 00:56:12',
                'updated_at' => '2020-03-19 00:56:12',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Webinars',
                'created_at' => '2020-03-26 01:21:12',
                'updated_at' => '2020-03-26 01:21:12',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Chapter Homes',
                'created_at' => '2020-04-02 02:12:00',
                'updated_at' => '2020-04-02 02:12:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Chapter Events',
                'created_at' => '2020-04-04 01:13:15',
                'updated_at' => '2020-04-04 01:13:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Chapter Board Members',
                'created_at' => '2020-04-08 01:18:37',
                'updated_at' => '2020-04-16 05:14:49',
                'deleted_at' => '2020-04-16 05:14:49',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Chapter Board Members',
                'created_at' => '2020-04-08 01:22:12',
                'updated_at' => '2020-04-08 01:22:12',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Media Categories',
                'created_at' => '2020-04-10 04:17:10',
                'updated_at' => '2020-04-10 04:17:10',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Media',
                'created_at' => '2020-04-10 04:47:11',
                'updated_at' => '2020-04-10 04:47:11',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Chapter Logos',
                'created_at' => '2020-04-14 01:17:56',
                'updated_at' => '2020-04-14 01:17:56',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Chapter Page About Us',
                'created_at' => '2020-04-16 05:07:19',
                'updated_at' => '2020-04-16 05:08:34',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Chapter Page Events',
                'created_at' => '2020-04-17 00:27:48',
                'updated_at' => '2020-04-17 00:27:48',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Chapter Page Leaderships',
                'created_at' => '2020-04-18 07:07:13',
                'updated_at' => '2020-04-18 07:07:13',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Chapter Page Contact Us',
                'created_at' => '2020-04-18 07:27:25',
                'updated_at' => '2020-04-21 06:30:37',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Members',
                'created_at' => '2020-04-22 01:50:16',
                'updated_at' => '2020-04-22 01:50:16',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Chapter Page Homesliders',
                'created_at' => '2020-04-24 02:53:10',
                'updated_at' => '2020-04-24 02:53:10',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Chapter Contacts',
                'created_at' => '2020-04-27 06:08:34',
                'updated_at' => '2020-04-27 06:08:34',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Event Registrations',
                'created_at' => '2020-04-28 09:17:57',
                'updated_at' => '2020-04-28 09:17:57',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Benefits Categories',
                'created_at' => '2020-05-29 21:59:53',
                'updated_at' => '2020-05-29 21:59:53',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}