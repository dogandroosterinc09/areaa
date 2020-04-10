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
                'last_login' => '2020-04-07 14:53:07',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:04',
                'updated_at' => '2020-04-07 14:53:07',
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
                'last_login' => '2020-04-09 20:02:45',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:04',
                'updated_at' => '2020-04-09 20:02:45',
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
                'last_login' => '2018-03-01 13:14:05',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-01 13:14:05',
                'updated_at' => '2018-03-01 14:04:25',
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
                'last_login' => '2020-04-07 14:53:43',
                'token' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-06 23:25:20',
                'updated_at' => '2020-04-07 14:53:43',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}