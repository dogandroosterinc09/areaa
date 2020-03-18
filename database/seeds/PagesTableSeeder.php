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
                'banner_image' => '0',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 1,
                'page_type_id' => 1,
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2020-03-17 01:10:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'About Us',
                'slug' => 'about-us',
                'content' => '',
                'banner_image' => '0',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 2,
                'page_type_id' => 2,
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2020-03-14 04:01:25',
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
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2019-10-05 14:04:34',
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
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2019-10-05 14:04:34',
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
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2019-10-05 14:04:34',
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
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2019-10-05 14:04:34',
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
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2019-10-05 14:04:34',
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
                'created_at' => '2019-10-05 14:04:34',
                'updated_at' => '2019-10-05 14:04:34',
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
                'created_at' => '2020-01-31 13:35:47',
                'updated_at' => '2020-01-31 13:35:47',
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
                'created_at' => '2020-01-31 13:36:25',
                'updated_at' => '2020-01-31 13:36:25',
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
                'created_at' => '2020-01-31 13:58:33',
                'updated_at' => '2020-01-31 13:58:33',
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
                'created_at' => '2020-02-04 15:12:26',
                'updated_at' => '2020-02-04 15:12:26',
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
                'created_at' => '2020-02-05 12:40:26',
                'updated_at' => '2020-02-05 12:40:26',
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
                'created_at' => '2020-02-20 14:38:32',
                'updated_at' => '2020-02-20 14:38:32',
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
                'created_at' => '2020-02-21 13:39:09',
                'updated_at' => '2020-02-21 13:39:09',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'dashboard-main',
                'slug' => 'dashboard-main',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 16,
                'page_type_id' => 0,
                'created_at' => '2020-02-26 15:01:17',
                'updated_at' => '2020-02-26 15:01:17',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'FAQ',
                'slug' => 'FAQ',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 17,
                'page_type_id' => 0,
                'created_at' => '2020-02-28 10:58:28',
                'updated_at' => '2020-02-28 10:58:28',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'media',
                'slug' => 'media',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-02-28 14:55:29',
                'updated_at' => '2020-02-28 14:55:29',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'photo-gallery',
                'slug' => 'photo-gallery',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'areabenefits',
                'slug' => 'areabenefits',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 20,
                'page_type_id' => 0,
                'created_at' => '2020-03-10 16:09:21',
                'updated_at' => '2020-03-10 16:09:21',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'membership-registration',
                'slug' => 'membership-registration',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 21,
                'page_type_id' => 0,
                'created_at' => '2020-03-11 18:01:13',
                'updated_at' => '2020-03-11 18:01:13',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'chapter-homepage',
                'slug' => 'chapter-homepage',
                'content' => '',
                'banner_image' => '0',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 16,
                'page_type_id' => 0,
                'created_at' => '2020-03-13 17:55:28',
                'updated_at' => '2020-03-14 07:25:35',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'chapter-event-detail',
                'slug' => 'chapter-event-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 23,
                'page_type_id' => 0,
                'created_at' => '2020-03-13 19:00:54',
                'updated_at' => '2020-03-13 19:00:54',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'chapter-events',
                'slug' => 'chapter-events',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 24,
                'page_type_id' => 0,
                'created_at' => '2020-03-13 19:01:08',
                'updated_at' => '2020-03-13 19:01:08',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'resources',
                'slug' => 'resources',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 17,
                'page_type_id' => 0,
                'created_at' => '2020-03-17 21:48:55',
                'updated_at' => '2020-03-17 21:48:55',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'resource-page',
                'slug' => 'resource-page',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-03-17 22:20:57',
                'updated_at' => '2020-03-17 22:20:57',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'resource-asia-america-report',
                'slug' => 'resource-asia-america-report',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-17 23:15:03',
                'updated_at' => '2020-03-17 23:15:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}