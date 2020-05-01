<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 0,
                'email' => 'super_admin@dogandrooster.com',
                'user_name' => 'super_admin',
                'password' => '$2y$10$fvcK8QNeRUpnZF3HhyE7DOS5luEhVKAcRgIoJlWidiKAHyneYgeHi',
                'first_name' => 'Super',
                'middle_name' => '',
                'last_name' => 'Admin',
                'phone' => '',
                'profile_image' => '',
                'chapter_id' => NULL,
                'is_active' => 1,
                'last_login' => '2020-04-28 02:06:54',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:04',
                'updated_at' => '2020-04-28 02:06:54',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 0,
                'email' => 'test1@dogandrooster.net',
                'user_name' => 'webmaster',
                'password' => '$2y$10$O04W12OFlU2ieWp.dA268e6B44PuMKIy2G6wUDs9fWb8ptqc1ZQWi',
                'first_name' => 'Webmaster',
                'middle_name' => '',
                'last_name' => 'Webmaster',
                'phone' => '',
                'profile_image' => '',
                'chapter_id' => NULL,
                'is_active' => 1,
                'last_login' => '2020-04-29 16:43:52',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:04',
                'updated_at' => '2020-04-29 16:43:52',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'status' => 0,
                'email' => 'customer_user@dogandrooster.com',
                'user_name' => 'customer_user',
                'password' => '$2y$10$kcApan9j3RxaYDYYtCZC8O7RqI/979pAHy2H2T1fwNYC8yzCsE0Ui',
                'first_name' => 'Customer',
                'middle_name' => '',
                'last_name' => 'One',
                'phone' => '',
                'profile_image' => '',
                'chapter_id' => NULL,
                'is_active' => 1,
                'last_login' => '2020-04-30 00:31:59',
                'token' => NULL,
                'remember_token' => 'W6xhso3jIPWRcUaraqkkZPSO2Yej23hxexrglx57rNHaDtXegKZrBPmhJAbf',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2020-04-30 00:31:59',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'status' => 0,
                'email' => 'admin_aloha@email.com',
                'user_name' => 'admin_aloha',
                'password' => '$2y$10$xbn6YK0ruU7tQ93B6yok5OtX6ZOnwdy8CIKQk0AbYCcLaSO5.E03m',
                'first_name' => 'Chapter',
                'middle_name' => '',
                'last_name' => 'Admin',
                'phone' => '',
                'profile_image' => '',
                'chapter_id' => 1,
                'is_active' => 1,
                'last_login' => '2020-04-27 02:13:27',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-06 23:25:20',
                'updated_at' => '2020-04-27 02:13:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 17,
                'status' => 0,
                'email' => 'customer4@email.com',
                'user_name' => 'customer_4',
                'password' => '$2y$10$yvG14nSJXwXBD8FZIXvEKemek7n0tWRXI4PkiDlbWzn8MiAS/HsXG',
                'first_name' => 'Stephen',
                'middle_name' => '',
                'last_name' => 'Chow',
                'phone' => '0',
                'profile_image' => 'public/storage/BoardMember/WCogUzMBvtlgDxIC.jpg',
                'chapter_id' => 1,
                'is_active' => 1,
                'last_login' => '2020-04-23 05:14:14',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-22 14:14:14',
                'updated_at' => '2020-04-22 14:14:14',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'status' => 0,
                'email' => 'customer3@email.com',
                'user_name' => 'customer_3',
                'password' => '$2y$10$8M.HceoGlu753fAZccGri.VsIGVql.J9WrJ/YUzt249vRwK8ECJA6',
                'first_name' => 'Patrisha',
                'middle_name' => '',
                'last_name' => 'Kingsley',
                'phone' => '0',
                'profile_image' => 'public/images/member-detail.jpg',
                'chapter_id' => 2,
                'is_active' => 1,
                'last_login' => '2020-04-23 05:13:23',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-22 14:13:23',
                'updated_at' => '2020-04-22 14:13:23',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'status' => 0,
                'email' => 'customer2@email.com',
                'user_name' => 'customer_2',
                'password' => '$2y$10$3FbU/JFaHaTr5KwP0fRaQegIvLz3zd8G6AXaBTZ4OLJujWVyBlY0O',
                'first_name' => 'Bruce',
                'middle_name' => '',
                'last_name' => 'McDonald',
                'phone' => '0',
                'profile_image' => 'public/storage/ChapterBoardMember/6b1FTg2hQOFJUZwG.jpg',
                'chapter_id' => 1,
                'is_active' => 1,
                'last_login' => '2020-04-23 05:11:49',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-22 14:11:49',
                'updated_at' => '2020-04-22 14:11:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 14,
                'status' => 0,
                'email' => 'customer1@email.com',
                'user_name' => 'customer_1',
                'password' => '$2y$10$S5EMCRLwUDq8Okb.AsnU5epF2rCnHusZP6g6ADjsMmVPUJ58MQOsu',
                'first_name' => 'Mami',
                'middle_name' => '',
                'last_name' => 'Takeda',
                'phone' => '0',
                'profile_image' => 'public/storage/ChapterBoardMember/77vDJKkTSc7lybtl.jpg',
                'chapter_id' => 1,
                'is_active' => 1,
                'last_login' => '2020-04-23 05:10:27',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-22 14:10:27',
                'updated_at' => '2020-04-22 14:10:27',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 18,
                'status' => 0,
                'email' => 'johndoe@email.com',
                'user_name' => 'customer5',
                'password' => '$2y$10$oJsLTB3EdRq1VdkyVV7ryulnoT0SBp7yYjH0Y0KJcitXpNxBeCojW',
                'first_name' => 'John',
                'middle_name' => '',
                'last_name' => 'Doe',
                'phone' => '1234567890',
                'profile_image' => '',
                'chapter_id' => 1,
                'is_active' => 1,
                'last_login' => '2020-04-30 15:58:19',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-30 00:58:19',
                'updated_at' => '2020-04-30 00:58:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}