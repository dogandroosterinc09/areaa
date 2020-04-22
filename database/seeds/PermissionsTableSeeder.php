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
            52 => 
            array (
                'id' => 53,
                'name' => 'Create Benefits',
                'guard_name' => 'web',
                'permission_group_id' => 14,
                'created_at' => '2020-03-18 16:56:12',
                'updated_at' => '2020-03-18 16:56:12',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Read Benefits',
                'guard_name' => 'web',
                'permission_group_id' => 14,
                'created_at' => '2020-03-18 16:56:12',
                'updated_at' => '2020-03-18 16:56:12',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Update Benefits',
                'guard_name' => 'web',
                'permission_group_id' => 14,
                'created_at' => '2020-03-18 16:56:12',
                'updated_at' => '2020-03-18 16:56:12',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Delete Benefits',
                'guard_name' => 'web',
                'permission_group_id' => 14,
                'created_at' => '2020-03-18 16:56:12',
                'updated_at' => '2020-03-18 16:56:12',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Create Webinars',
                'guard_name' => 'web',
                'permission_group_id' => 15,
                'created_at' => '2020-03-25 17:21:12',
                'updated_at' => '2020-03-25 17:21:12',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Read Webinars',
                'guard_name' => 'web',
                'permission_group_id' => 15,
                'created_at' => '2020-03-25 17:21:12',
                'updated_at' => '2020-03-25 17:21:12',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Update Webinars',
                'guard_name' => 'web',
                'permission_group_id' => 15,
                'created_at' => '2020-03-25 17:21:12',
                'updated_at' => '2020-03-25 17:21:12',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Delete Webinars',
                'guard_name' => 'web',
                'permission_group_id' => 15,
                'created_at' => '2020-03-25 17:21:12',
                'updated_at' => '2020-03-25 17:21:12',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Create Chapter Home',
                'guard_name' => 'web',
                'permission_group_id' => 16,
                'created_at' => '2020-04-01 18:12:00',
                'updated_at' => '2020-04-01 18:12:00',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Read Chapter Home',
                'guard_name' => 'web',
                'permission_group_id' => 16,
                'created_at' => '2020-04-01 18:12:00',
                'updated_at' => '2020-04-01 18:12:00',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Update Chapter Home',
                'guard_name' => 'web',
                'permission_group_id' => 16,
                'created_at' => '2020-04-01 18:12:00',
                'updated_at' => '2020-04-01 18:12:00',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Delete Chapter Home',
                'guard_name' => 'web',
                'permission_group_id' => 16,
                'created_at' => '2020-04-01 18:12:00',
                'updated_at' => '2020-04-01 18:12:00',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Read Chapter Page',
                'guard_name' => 'web',
                'permission_group_id' => 13,
                'created_at' => '2020-04-02 15:16:26',
                'updated_at' => '2020-04-02 15:16:26',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Create Chapter Event',
                'guard_name' => 'web',
                'permission_group_id' => 17,
                'created_at' => '2020-04-03 17:13:16',
                'updated_at' => '2020-04-03 17:13:16',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Read Chapter Event',
                'guard_name' => 'web',
                'permission_group_id' => 17,
                'created_at' => '2020-04-03 17:13:16',
                'updated_at' => '2020-04-03 17:13:16',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Update Chapter Event',
                'guard_name' => 'web',
                'permission_group_id' => 17,
                'created_at' => '2020-04-03 17:13:16',
                'updated_at' => '2020-04-03 17:13:16',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Delete Chapter Event',
                'guard_name' => 'web',
                'permission_group_id' => 17,
                'created_at' => '2020-04-03 17:13:16',
                'updated_at' => '2020-04-03 17:13:16',
            ),
            69 => 
            array (
                'id' => 74,
                'name' => 'Create Chapter Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 19,
                'created_at' => '2020-04-07 17:22:12',
                'updated_at' => '2020-04-07 17:22:12',
            ),
            70 => 
            array (
                'id' => 75,
                'name' => 'Read Chapter Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 19,
                'created_at' => '2020-04-07 17:22:12',
                'updated_at' => '2020-04-07 17:22:12',
            ),
            71 => 
            array (
                'id' => 76,
                'name' => 'Update Chapter Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 19,
                'created_at' => '2020-04-07 17:22:12',
                'updated_at' => '2020-04-07 17:22:12',
            ),
            72 => 
            array (
                'id' => 77,
                'name' => 'Delete Chapter Board Member',
                'guard_name' => 'web',
                'permission_group_id' => 19,
                'created_at' => '2020-04-07 17:22:12',
                'updated_at' => '2020-04-07 17:22:12',
            ),
            73 => 
            array (
                'id' => 78,
                'name' => 'Create Media Category',
                'guard_name' => 'web',
                'permission_group_id' => 20,
                'created_at' => '2020-04-09 20:17:10',
                'updated_at' => '2020-04-09 20:17:10',
            ),
            74 => 
            array (
                'id' => 79,
                'name' => 'Read Media Category',
                'guard_name' => 'web',
                'permission_group_id' => 20,
                'created_at' => '2020-04-09 20:17:10',
                'updated_at' => '2020-04-09 20:17:10',
            ),
            75 => 
            array (
                'id' => 80,
                'name' => 'Update Media Category',
                'guard_name' => 'web',
                'permission_group_id' => 20,
                'created_at' => '2020-04-09 20:17:10',
                'updated_at' => '2020-04-09 20:17:10',
            ),
            76 => 
            array (
                'id' => 81,
                'name' => 'Delete Media Category',
                'guard_name' => 'web',
                'permission_group_id' => 20,
                'created_at' => '2020-04-09 20:17:10',
                'updated_at' => '2020-04-09 20:17:10',
            ),
            77 => 
            array (
                'id' => 82,
                'name' => 'Create Media',
                'guard_name' => 'web',
                'permission_group_id' => 21,
                'created_at' => '2020-04-09 20:47:11',
                'updated_at' => '2020-04-09 20:47:11',
            ),
            78 => 
            array (
                'id' => 83,
                'name' => 'Read Media',
                'guard_name' => 'web',
                'permission_group_id' => 21,
                'created_at' => '2020-04-09 20:47:11',
                'updated_at' => '2020-04-09 20:47:11',
            ),
            79 => 
            array (
                'id' => 84,
                'name' => 'Update Media',
                'guard_name' => 'web',
                'permission_group_id' => 21,
                'created_at' => '2020-04-09 20:47:11',
                'updated_at' => '2020-04-09 20:47:11',
            ),
            80 => 
            array (
                'id' => 85,
                'name' => 'Delete Media',
                'guard_name' => 'web',
                'permission_group_id' => 21,
                'created_at' => '2020-04-09 20:47:11',
                'updated_at' => '2020-04-09 20:47:11',
            ),
            81 => 
            array (
                'id' => 86,
                'name' => 'Create Chapter Logo',
                'guard_name' => 'web',
                'permission_group_id' => 22,
                'created_at' => '2020-04-13 17:17:56',
                'updated_at' => '2020-04-13 17:17:56',
            ),
            82 => 
            array (
                'id' => 87,
                'name' => 'Read Chapter Logo',
                'guard_name' => 'web',
                'permission_group_id' => 22,
                'created_at' => '2020-04-13 17:17:56',
                'updated_at' => '2020-04-13 17:17:56',
            ),
            83 => 
            array (
                'id' => 88,
                'name' => 'Update Chapter Logo',
                'guard_name' => 'web',
                'permission_group_id' => 22,
                'created_at' => '2020-04-13 17:17:56',
                'updated_at' => '2020-04-13 17:17:56',
            ),
            84 => 
            array (
                'id' => 89,
                'name' => 'Delete Chapter Logo',
                'guard_name' => 'web',
                'permission_group_id' => 22,
                'created_at' => '2020-04-13 17:17:56',
                'updated_at' => '2020-04-13 17:17:56',
            ),
            85 => 
            array (
                'id' => 90,
                'name' => 'Create Chapter Page About Us',
                'guard_name' => 'web',
                'permission_group_id' => 23,
                'created_at' => '2020-04-15 21:07:19',
                'updated_at' => '2020-04-15 21:07:19',
            ),
            86 => 
            array (
                'id' => 91,
                'name' => 'Read Chapter Page About Us',
                'guard_name' => 'web',
                'permission_group_id' => 23,
                'created_at' => '2020-04-15 21:07:19',
                'updated_at' => '2020-04-15 21:07:19',
            ),
            87 => 
            array (
                'id' => 92,
                'name' => 'Update Chapter Page About Us',
                'guard_name' => 'web',
                'permission_group_id' => 23,
                'created_at' => '2020-04-15 21:07:19',
                'updated_at' => '2020-04-15 21:07:19',
            ),
            88 => 
            array (
                'id' => 93,
                'name' => 'Delete Chapter Page About Us',
                'guard_name' => 'web',
                'permission_group_id' => 23,
                'created_at' => '2020-04-15 21:07:19',
                'updated_at' => '2020-04-15 21:07:19',
            ),
            89 => 
            array (
                'id' => 94,
                'name' => 'Create Chapter Page Event',
                'guard_name' => 'web',
                'permission_group_id' => 24,
                'created_at' => '2020-04-16 16:27:48',
                'updated_at' => '2020-04-16 16:27:48',
            ),
            90 => 
            array (
                'id' => 95,
                'name' => 'Read Chapter Page Event',
                'guard_name' => 'web',
                'permission_group_id' => 24,
                'created_at' => '2020-04-16 16:27:48',
                'updated_at' => '2020-04-16 16:27:48',
            ),
            91 => 
            array (
                'id' => 96,
                'name' => 'Update Chapter Page Event',
                'guard_name' => 'web',
                'permission_group_id' => 24,
                'created_at' => '2020-04-16 16:27:48',
                'updated_at' => '2020-04-16 16:27:48',
            ),
            92 => 
            array (
                'id' => 97,
                'name' => 'Delete Chapter Page Event',
                'guard_name' => 'web',
                'permission_group_id' => 24,
                'created_at' => '2020-04-16 16:27:48',
                'updated_at' => '2020-04-16 16:27:48',
            ),
            93 => 
            array (
                'id' => 98,
                'name' => 'Create Chapter Page Leadership',
                'guard_name' => 'web',
                'permission_group_id' => 25,
                'created_at' => '2020-04-17 23:07:13',
                'updated_at' => '2020-04-17 23:07:13',
            ),
            94 => 
            array (
                'id' => 99,
                'name' => 'Read Chapter Page Leadership',
                'guard_name' => 'web',
                'permission_group_id' => 25,
                'created_at' => '2020-04-17 23:07:13',
                'updated_at' => '2020-04-17 23:07:13',
            ),
            95 => 
            array (
                'id' => 100,
                'name' => 'Update Chapter Page Leadership',
                'guard_name' => 'web',
                'permission_group_id' => 25,
                'created_at' => '2020-04-17 23:07:13',
                'updated_at' => '2020-04-17 23:07:13',
            ),
            96 => 
            array (
                'id' => 101,
                'name' => 'Delete Chapter Page Leadership',
                'guard_name' => 'web',
                'permission_group_id' => 25,
                'created_at' => '2020-04-17 23:07:13',
                'updated_at' => '2020-04-17 23:07:13',
            ),
            97 => 
            array (
                'id' => 102,
                'name' => 'Create Chapter Page Contact Us',
                'guard_name' => 'web',
                'permission_group_id' => 26,
                'created_at' => '2020-04-17 23:27:25',
                'updated_at' => '2020-04-17 23:27:25',
            ),
            98 => 
            array (
                'id' => 103,
                'name' => 'Read Chapter Page Contact Us',
                'guard_name' => 'web',
                'permission_group_id' => 26,
                'created_at' => '2020-04-17 23:27:25',
                'updated_at' => '2020-04-17 23:27:25',
            ),
            99 => 
            array (
                'id' => 104,
                'name' => 'Update Chapter Page Contact Us',
                'guard_name' => 'web',
                'permission_group_id' => 26,
                'created_at' => '2020-04-17 23:27:25',
                'updated_at' => '2020-04-17 23:27:25',
            ),
            100 => 
            array (
                'id' => 105,
                'name' => 'Delete Chapter Page Contact Us',
                'guard_name' => 'web',
                'permission_group_id' => 26,
                'created_at' => '2020-04-17 23:27:25',
                'updated_at' => '2020-04-17 23:27:25',
            ),
            101 => 
            array (
                'id' => 106,
                'name' => 'Create Members',
                'guard_name' => 'web',
                'permission_group_id' => 27,
                'created_at' => '2020-04-21 17:50:16',
                'updated_at' => '2020-04-21 17:50:16',
            ),
            102 => 
            array (
                'id' => 107,
                'name' => 'Read Members',
                'guard_name' => 'web',
                'permission_group_id' => 27,
                'created_at' => '2020-04-21 17:50:16',
                'updated_at' => '2020-04-21 17:50:16',
            ),
            103 => 
            array (
                'id' => 108,
                'name' => 'Update Members',
                'guard_name' => 'web',
                'permission_group_id' => 27,
                'created_at' => '2020-04-21 17:50:16',
                'updated_at' => '2020-04-21 17:50:16',
            ),
            104 => 
            array (
                'id' => 109,
                'name' => 'Delete Members',
                'guard_name' => 'web',
                'permission_group_id' => 27,
                'created_at' => '2020-04-21 17:50:16',
                'updated_at' => '2020-04-21 17:50:16',
            ),
        ));
        
        
    }
}