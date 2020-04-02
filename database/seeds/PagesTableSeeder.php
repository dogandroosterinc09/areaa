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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2020-03-18 01:10:36',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2020-03-15 04:01:25',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2019-10-06 14:04:34',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2019-10-06 14:04:34',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2019-10-06 14:04:34',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2019-10-06 14:04:34',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2019-10-06 14:04:34',
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
                'created_at' => '2019-10-06 14:04:34',
                'updated_at' => '2019-10-06 14:04:34',
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
                'created_at' => '2020-02-01 13:35:47',
                'updated_at' => '2020-02-01 13:35:47',
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
                'created_at' => '2020-02-01 13:36:25',
                'updated_at' => '2020-02-01 13:36:25',
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
                'created_at' => '2020-02-01 13:58:33',
                'updated_at' => '2020-02-01 13:58:33',
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
                'created_at' => '2020-02-05 15:12:26',
                'updated_at' => '2020-02-05 15:12:26',
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
                'created_at' => '2020-02-06 12:40:26',
                'updated_at' => '2020-02-06 12:40:26',
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
                'created_at' => '2020-02-21 14:38:32',
                'updated_at' => '2020-02-21 14:38:32',
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
                'created_at' => '2020-02-22 13:39:09',
                'updated_at' => '2020-02-22 13:39:09',
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
                'created_at' => '2020-02-27 15:01:17',
                'updated_at' => '2020-02-27 15:01:17',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'FAQ',
                'slug' => 'FAQ',
                'content' => '',
                'banner_image' => '0',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 17,
                'page_type_id' => 0,
                'created_at' => '2020-02-29 10:58:28',
                'updated_at' => '2020-03-19 20:37:28',
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
                'created_at' => '2020-02-29 14:55:29',
                'updated_at' => '2020-02-29 14:55:29',
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
                'created_at' => '2020-03-08 15:10:58',
                'updated_at' => '2020-03-08 15:10:58',
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
                'created_at' => '2020-03-11 16:09:21',
                'updated_at' => '2020-03-11 16:09:21',
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
                'created_at' => '2020-03-12 18:01:13',
                'updated_at' => '2020-03-12 18:01:13',
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
                'created_at' => '2020-03-14 17:55:28',
                'updated_at' => '2020-03-15 07:25:35',
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
                'created_at' => '2020-03-14 19:00:54',
                'updated_at' => '2020-03-14 19:00:54',
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
                'created_at' => '2020-03-14 19:01:08',
                'updated_at' => '2020-03-14 19:01:08',
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
                'created_at' => '2020-03-18 21:48:55',
                'updated_at' => '2020-03-18 21:48:55',
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
                'created_at' => '2020-03-18 22:20:57',
                'updated_at' => '2020-03-18 22:20:57',
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
                'created_at' => '2020-03-18 23:15:03',
                'updated_at' => '2020-03-18 23:15:03',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'aloha',
                'slug' => 'aloha1',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 14:56:04',
                'updated_at' => '2020-03-20 14:56:04',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'newyorkeast',
                'slug' => 'newyorkeast',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 15:29:47',
                'updated_at' => '2020-03-20 15:29:47',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'newyorkeast-events',
                'slug' => 'newyorkeast-events',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 20,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 16:43:51',
                'updated_at' => '2020-03-20 16:43:51',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'newyorkeast-login',
                'slug' => 'newyorkeast-login',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 21,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 16:44:19',
                'updated_at' => '2020-03-20 16:44:19',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'aloha-login',
                'slug' => 'aloha-login',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 22,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 18:11:11',
                'updated_at' => '2020-03-20 18:11:11',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'newyorkeast-contactus',
                'slug' => 'newyorkeast-contactus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 23,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 18:26:15',
                'updated_at' => '2020-03-20 18:26:15',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'newyorkeast-leadership',
                'slug' => 'newyorkeast-leadership',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 24,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 18:26:29',
                'updated_at' => '2020-03-20 18:26:29',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'newyorkeast-aboutus',
                'slug' => 'newyorkeast-aboutus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 25,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 18:27:20',
                'updated_at' => '2020-03-20 18:27:20',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'aloha-aboutus',
                'slug' => 'aloha-aboutus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 26,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 18:42:09',
                'updated_at' => '2020-03-20 18:42:09',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'aloha-contactus',
                'slug' => 'aloha-contactus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 27,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 19:50:23',
                'updated_at' => '2020-03-20 19:50:23',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'atlantametro',
                'slug' => 'atlantametro',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 28,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 20:09:35',
                'updated_at' => '2020-03-20 20:09:35',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'atlantametro-login',
                'slug' => 'atlantametro-login',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 29,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 20:12:15',
                'updated_at' => '2020-03-20 20:12:15',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'atlantametro-contactus',
                'slug' => 'atlantametro-contactus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 30,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 20:12:28',
                'updated_at' => '2020-03-20 20:12:28',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'atlantametro-leadership',
                'slug' => 'atlantametro-leadership',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 31,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 20:12:43',
                'updated_at' => '2020-03-20 20:12:43',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'atlantametro-events',
                'slug' => 'atlantametro-events',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 32,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 20:13:24',
                'updated_at' => '2020-03-20 20:13:24',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'aloha-events',
                'slug' => 'aloha-events',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 05:07:47',
                'updated_at' => '2020-03-21 05:07:47',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'aloha-leadership',
                'slug' => 'aloha-leadership',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 05:08:19',
                'updated_at' => '2020-03-21 05:08:19',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'atlantametro-aboutus',
                'slug' => 'atlantametro-aboutus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 20,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 05:08:53',
                'updated_at' => '2020-03-21 05:08:53',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'aloha-events-detail',
                'slug' => 'aloha-events-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 21,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 05:35:04',
                'updated_at' => '2020-03-21 05:35:04',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'atlantametro-events-detail',
                'slug' => 'atlantametro-events-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 22,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 05:35:29',
                'updated_at' => '2020-03-21 05:35:29',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'newyorkeast-events-detail',
                'slug' => 'newyorkeast-events-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 23,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 05:36:01',
                'updated_at' => '2020-03-21 05:36:01',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'aloha-leadership-detail',
                'slug' => 'aloha-leadership-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 24,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 13:21:57',
                'updated_at' => '2020-03-21 13:21:57',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'atlantametro-leadership-detail',
                'slug' => 'atlantametro-leadership-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 25,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 13:34:35',
                'updated_at' => '2020-03-21 13:34:35',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'newyorkeast-leadership-detail',
                'slug' => 'newyorkeast-leadership-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 26,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 13:35:15',
                'updated_at' => '2020-03-21 13:35:15',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'sponsors',
                'slug' => 'sponsors',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-03-23 21:51:05',
                'updated_at' => '2020-03-23 21:51:05',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'our-partners',
                'slug' => 'our-partners',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-23 21:53:14',
                'updated_at' => '2020-03-23 21:53:14',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}