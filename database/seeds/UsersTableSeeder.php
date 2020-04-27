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
                'last_login' => '2020-04-27 02:14:56',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:04',
                'updated_at' => '2020-04-27 02:14:56',
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
                'last_login' => '2020-04-27 02:13:15',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:04',
                'updated_at' => '2020-04-27 02:13:15',
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
                'last_login' => '2020-04-27 02:11:58',
                'token' => NULL,
                'remember_token' => 'WlTZ9M4t4EuNDg7jHLoiw3QdJimnDZeH3T6e8IZzxBA34a5gnBgBLbvQfgai',
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2020-04-27 02:11:58',
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
                'first_name' => 'Gregory',
                'middle_name' => '',
                'last_name' => 'Smith',
                'phone' => '0',
                'profile_image' => 'public/images/member-avatar4.jpg',
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
                'chapter_id' => 1,
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
                'first_name' => 'Henry',
                'middle_name' => '',
                'last_name' => 'McCalistar',
                'phone' => '0',
                'profile_image' => 'public/images/member-avatar2.jpg',
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
                'first_name' => 'Mary',
                'middle_name' => '',
                'last_name' => 'Johnson',
                'phone' => '0',
                'profile_image' => 'public/images/member-avatar.jpg',
                'chapter_id' => 1,
                'is_active' => 1,
                'last_login' => '2020-04-23 05:10:27',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-22 14:10:27',
                'updated_at' => '2020-04-22 14:10:27',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}