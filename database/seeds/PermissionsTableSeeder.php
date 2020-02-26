<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Create Role',
                'guard_name' => 'web',
                'permission_group_id' => 1,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Read Role',
                'guard_name' => 'web',
                'permission_group_id' => 1,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Update Role',
                'guard_name' => 'web',
                'permission_group_id' => 1,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Delete Role',
                'guard_name' => 'web',
                'permission_group_id' => 1,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Create Permission',
                'guard_name' => 'web',
                'permission_group_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Read Permission',
                'guard_name' => 'web',
                'permission_group_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Update Permission',
                'guard_name' => 'web',
                'permission_group_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Delete Permission',
                'guard_name' => 'web',
                'permission_group_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Create Permission Group',
                'guard_name' => 'web',
                'permission_group_id' => 3,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Read Permission Group',
                'guard_name' => 'web',
                'permission_group_id' => 3,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Update Permission Group',
                'guard_name' => 'web',
                'permission_group_id' => 3,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Delete Permission Group',
                'guard_name' => 'web',
                'permission_group_id' => 3,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Create User',
                'guard_name' => 'web',
                'permission_group_id' => 4,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Read User',
                'guard_name' => 'web',
                'permission_group_id' => 4,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Update User',
                'guard_name' => 'web',
                'permission_group_id' => 4,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Delete User',
                'guard_name' => 'web',
                'permission_group_id' => 4,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Create System Setting',
                'guard_name' => 'web',
                'permission_group_id' => 5,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Read System Setting',
                'guard_name' => 'web',
                'permission_group_id' => 5,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Update System Setting',
                'guard_name' => 'web',
                'permission_group_id' => 5,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Delete System Setting',
                'guard_name' => 'web',
                'permission_group_id' => 5,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Create Page',
                'guard_name' => 'web',
                'permission_group_id' => 6,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Read Page',
                'guard_name' => 'web',
                'permission_group_id' => 6,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Update Page',
                'guard_name' => 'web',
                'permission_group_id' => 6,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Delete Page',
                'guard_name' => 'web',
                'permission_group_id' => 6,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Create Home Slide',
                'guard_name' => 'web',
                'permission_group_id' => 7,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Read Home Slide',
                'guard_name' => 'web',
                'permission_group_id' => 7,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Update Home Slide',
                'guard_name' => 'web',
                'permission_group_id' => 7,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Delete Home Slide',
                'guard_name' => 'web',
                'permission_group_id' => 7,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Create Contact',
                'guard_name' => 'web',
                'permission_group_id' => 8,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Read Contact',
                'guard_name' => 'web',
                'permission_group_id' => 7,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Update Contact',
                'guard_name' => 'web',
                'permission_group_id' => 8,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Delete Contact',
                'guard_name' => 'web',
                'permission_group_id' => 8,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Create Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 9,
                'created_at' => '2020-02-18 16:01:59',
                'updated_at' => '2020-02-18 16:01:59',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Read Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 9,
                'created_at' => '2020-02-18 16:01:59',
                'updated_at' => '2020-02-18 16:01:59',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Update Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 9,
                'created_at' => '2020-02-18 16:01:59',
                'updated_at' => '2020-02-18 16:01:59',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Delete Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 9,
                'created_at' => '2020-02-18 16:01:59',
                'updated_at' => '2020-02-18 16:01:59',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Create Faq',
                'guard_name' => 'web',
                'permission_group_id' => 10,
                'created_at' => '2020-02-21 18:18:58',
                'updated_at' => '2020-02-21 18:18:58',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Read Faq',
                'guard_name' => 'web',
                'permission_group_id' => 10,
                'created_at' => '2020-02-21 18:18:59',
                'updated_at' => '2020-02-21 18:18:59',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Update Faq',
                'guard_name' => 'web',
                'permission_group_id' => 10,
                'created_at' => '2020-02-21 18:18:59',
                'updated_at' => '2020-02-21 18:18:59',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Delete Faq',
                'guard_name' => 'web',
                'permission_group_id' => 10,
                'created_at' => '2020-02-21 18:18:59',
                'updated_at' => '2020-02-21 18:18:59',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Create Gallery',
                'guard_name' => 'web',
                'permission_group_id' => 11,
                'created_at' => '2020-02-21 19:05:56',
                'updated_at' => '2020-02-21 19:05:56',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Read Gallery',
                'guard_name' => 'web',
                'permission_group_id' => 11,
                'created_at' => '2020-02-21 19:05:56',
                'updated_at' => '2020-02-21 19:05:56',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Update Gallery',
                'guard_name' => 'web',
                'permission_group_id' => 11,
                'created_at' => '2020-02-21 19:05:56',
                'updated_at' => '2020-02-21 19:05:56',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Delete Gallery',
                'guard_name' => 'web',
                'permission_group_id' => 11,
                'created_at' => '2020-02-21 19:05:56',
                'updated_at' => '2020-02-21 19:05:56',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Create Event',
                'guard_name' => 'web',
                'permission_group_id' => 12,
                'created_at' => '2020-02-25 16:43:13',
                'updated_at' => '2020-02-25 16:43:13',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Read Event',
                'guard_name' => 'web',
                'permission_group_id' => 12,
                'created_at' => '2020-02-25 16:43:13',
                'updated_at' => '2020-02-25 16:43:13',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Update Event',
                'guard_name' => 'web',
                'permission_group_id' => 12,
                'created_at' => '2020-02-25 16:43:13',
                'updated_at' => '2020-02-25 16:43:13',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Delete Event',
                'guard_name' => 'web',
                'permission_group_id' => 12,
                'created_at' => '2020-02-25 16:43:13',
                'updated_at' => '2020-02-25 16:43:13',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Create Chapter',
                'guard_name' => 'web',
                'permission_group_id' => 13,
                'created_at' => '2020-02-25 17:09:07',
                'updated_at' => '2020-02-25 17:09:07',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Read Chapter',
                'guard_name' => 'web',
                'permission_group_id' => 13,
                'created_at' => '2020-02-25 17:09:07',
                'updated_at' => '2020-02-25 17:09:07',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Update Chapter',
                'guard_name' => 'web',
                'permission_group_id' => 13,
                'created_at' => '2020-02-25 17:09:07',
                'updated_at' => '2020-02-25 17:09:07',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Delete Chapter',
                'guard_name' => 'web',
                'permission_group_id' => 13,
                'created_at' => '2020-02-25 17:09:07',
                'updated_at' => '2020-02-25 17:09:07',
            ),
        ));
        
        
    }
}