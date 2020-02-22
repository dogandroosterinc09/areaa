<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home',
                'slug' => 'home',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 1,
                'page_type_id' => 1,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'About Us',
                'slug' => 'about-us',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 2,
                'page_type_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 3,
                'page_type_id' => 3,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Page Not Found',
                'slug' => '404',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 4,
                'page_type_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Login',
                'slug' => 'customer/login',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 5,
                'page_type_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Register',
                'slug' => 'customer/register',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 6,
                'page_type_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Forgot Password',
                'slug' => 'customer/password/email',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 7,
                'page_type_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Reset Password',
                'slug' => 'customer/password/reset',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 8,
                'page_type_id' => 2,
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'executive-board',
                'slug' => 'executive-board',
                'content' => '',
                'banner_image' => '/tmp/phpA3Xmiy',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 9,
                'page_type_id' => 0,
                'created_at' => '2020-01-30 21:35:47',
                'updated_at' => '2020-01-30 21:35:47',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delegate-board',
                'slug' => 'delegate-board',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 10,
                'page_type_id' => 0,
                'created_at' => '2020-01-30 21:36:25',
                'updated_at' => '2020-01-30 21:36:25',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'board-detail',
                'slug' => 'board-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 11,
                'page_type_id' => 0,
                'created_at' => '2020-01-30 21:58:33',
                'updated_at' => '2020-01-30 21:58:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Events',
                'slug' => 'events',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 12,
                'page_type_id' => 0,
                'created_at' => '2020-02-03 23:12:26',
                'updated_at' => '2020-02-03 23:12:26',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'events-detail',
                'slug' => 'events-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 13,
                'page_type_id' => 0,
                'created_at' => '2020-02-04 20:40:26',
                'updated_at' => '2020-02-04 20:40:26',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'dashboard',
                'slug' => 'dashboard',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 14,
                'page_type_id' => 0,
                'created_at' => '2020-02-19 22:38:32',
                'updated_at' => '2020-02-19 22:38:32',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'chapter',
                'slug' => 'chapter',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 15,
                'page_type_id' => 0,
                'created_at' => '2020-02-20 21:39:09',
                'updated_at' => '2020-02-20 21:39:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}