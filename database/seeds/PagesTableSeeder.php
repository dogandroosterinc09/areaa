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
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2020-03-18 09:10:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'About Us',
                'slug' => 'about-us',
                'content' => '<h3>Learn More</h3>

<h1>About Us</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\phpC2D0.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 2,
                'page_type_id' => 2,
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2020-05-30 03:37:44',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => '',
                'banner_image' => '0',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 3,
                'page_type_id' => 3,
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2020-04-28 02:28:39',
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
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2019-10-06 22:04:34',
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
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2019-10-06 22:04:34',
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
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2019-10-06 22:04:34',
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
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2019-10-06 22:04:34',
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
                'created_at' => '2019-10-06 22:04:34',
                'updated_at' => '2019-10-06 22:04:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'executive-board',
                'slug' => 'executive-board',
                'content' => '<h3>Meet Our</h3>

<h1>Executive<br />
Board</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\phpCAE4.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 9,
                'page_type_id' => 0,
                'created_at' => '2020-02-01 21:35:47',
                'updated_at' => '2020-05-30 03:55:14',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delegate-board',
                'slug' => 'delegate-board',
                'content' => '<h3>Meet Our</h3>

<h1>Delegate<br />
Board</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php711D.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 10,
                'page_type_id' => 0,
                'created_at' => '2020-02-01 21:36:25',
                'updated_at' => '2020-05-30 03:39:34',
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
                'created_at' => '2020-02-01 21:58:33',
                'updated_at' => '2020-02-01 21:58:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Events',
                'slug' => 'events',
                'content' => '<h3>National</h3>

<h1>Events</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php96C2.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 12,
                'page_type_id' => 0,
                'created_at' => '2020-02-05 23:12:26',
                'updated_at' => '2020-05-30 04:03:45',
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
                'created_at' => '2020-02-06 20:40:26',
                'updated_at' => '2020-02-06 20:40:26',
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
                'created_at' => '2020-02-21 22:38:32',
                'updated_at' => '2020-02-21 22:38:32',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'chapter',
                'slug' => 'chapter',
                'content' => '<h3>Find your</h3>

<h1>Chapter</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php645B.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 15,
                'page_type_id' => 0,
                'created_at' => '2020-02-22 21:39:09',
                'updated_at' => '2020-05-30 04:02:27',
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
                'created_at' => '2020-02-27 23:01:17',
                'updated_at' => '2020-02-27 23:01:17',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'FAQ',
                'slug' => 'FAQ',
                'content' => '<h1>Frequently<br />
Asked<br />
Questions</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php141C.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 17,
                'page_type_id' => 0,
                'created_at' => '2020-02-29 18:58:28',
                'updated_at' => '2020-05-30 04:01:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'media',
                'slug' => 'media',
                'content' => '<h3>Areaa</h3>

<h1>Media</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\phpD9E8.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-02-29 22:55:29',
                'updated_at' => '2020-05-30 04:11:41',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'photo-gallery',
                'slug' => 'photo-gallery',
                'content' => '<h3>Photo</h3>

<h1>Gallery</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php4B0E.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-08 23:10:58',
                'updated_at' => '2020-05-30 03:52:31',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'areabenefits',
                'slug' => 'areabenefits',
                'content' => '<h3>AREAA</h3>

<h1>Benefits</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php8DC0.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 20,
                'page_type_id' => 0,
                'created_at' => '2020-03-12 00:09:21',
                'updated_at' => '2020-05-30 03:20:02',
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
                'created_at' => '2020-03-13 02:01:13',
                'updated_at' => '2020-03-13 02:01:13',
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
                'created_at' => '2020-03-15 01:55:28',
                'updated_at' => '2020-03-15 15:25:35',
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
                'created_at' => '2020-03-15 03:00:54',
                'updated_at' => '2020-03-15 03:00:54',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'chapter-events',
                'slug' => 'chapter-events',
                'content' => '<h3>Chapter</h3>

<h1>Events</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php1DC0.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 24,
                'page_type_id' => 0,
                'created_at' => '2020-03-15 03:01:08',
                'updated_at' => '2020-05-30 04:05:25',
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
                'created_at' => '2020-03-19 05:48:55',
                'updated_at' => '2020-03-19 05:48:55',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'resource-page',
                'slug' => 'resource-page',
                'content' => '<h1>Resources</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php6A1F.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-03-19 06:20:57',
                'updated_at' => '2020-05-30 04:09:02',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'resource-asia-america-report',
                'slug' => 'resource-asia-america-report',
                'content' => '<h3>Report</h3>

<h1>Asia America</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\phpCBF2.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-19 07:15:03',
                'updated_at' => '2020-05-30 04:10:32',
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
                'created_at' => '2020-03-20 22:56:04',
                'updated_at' => '2020-03-20 22:56:04',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'newyorkeast',
                'slug' => 'newyorkeast1',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-20 23:29:47',
                'updated_at' => '2020-03-20 23:29:47',
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
                'created_at' => '2020-03-21 00:43:51',
                'updated_at' => '2020-03-21 00:43:51',
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
                'created_at' => '2020-03-21 00:44:19',
                'updated_at' => '2020-03-21 00:44:19',
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
                'created_at' => '2020-03-21 02:11:11',
                'updated_at' => '2020-03-21 02:11:11',
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
                'created_at' => '2020-03-21 02:26:15',
                'updated_at' => '2020-03-21 02:26:15',
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
                'created_at' => '2020-03-21 02:26:29',
                'updated_at' => '2020-03-21 02:26:29',
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
                'created_at' => '2020-03-21 02:27:20',
                'updated_at' => '2020-03-21 02:27:20',
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
                'created_at' => '2020-03-21 02:42:09',
                'updated_at' => '2020-03-21 02:42:09',
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
                'created_at' => '2020-03-21 03:50:23',
                'updated_at' => '2020-03-21 03:50:23',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'atlantametro',
                'slug' => 'atlantametro1',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 28,
                'page_type_id' => 0,
                'created_at' => '2020-03-21 04:09:35',
                'updated_at' => '2020-03-21 04:09:35',
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
                'created_at' => '2020-03-21 04:12:15',
                'updated_at' => '2020-03-21 04:12:15',
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
                'created_at' => '2020-03-21 04:12:28',
                'updated_at' => '2020-03-21 04:12:28',
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
                'created_at' => '2020-03-21 04:12:43',
                'updated_at' => '2020-03-21 04:12:43',
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
                'created_at' => '2020-03-21 04:13:24',
                'updated_at' => '2020-03-21 04:13:24',
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
                'created_at' => '2020-03-21 13:07:47',
                'updated_at' => '2020-03-21 13:07:47',
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
                'created_at' => '2020-03-21 13:08:19',
                'updated_at' => '2020-03-21 13:08:19',
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
                'created_at' => '2020-03-21 13:08:53',
                'updated_at' => '2020-03-21 13:08:53',
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
                'created_at' => '2020-03-21 13:35:04',
                'updated_at' => '2020-03-21 13:35:04',
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
                'created_at' => '2020-03-21 13:35:29',
                'updated_at' => '2020-03-21 13:35:29',
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
                'created_at' => '2020-03-21 13:36:01',
                'updated_at' => '2020-03-21 13:36:01',
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
                'created_at' => '2020-03-21 21:21:57',
                'updated_at' => '2020-03-21 21:21:57',
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
                'created_at' => '2020-03-21 21:34:35',
                'updated_at' => '2020-03-21 21:34:35',
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
                'created_at' => '2020-03-21 21:35:15',
                'updated_at' => '2020-03-21 21:35:15',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'sponsors',
                'slug' => 'sponsors',
                'content' => '<h3>Areaa</h3>

<h1>Sponsors</h1>
',
                'banner_image' => '102',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-03-24 05:51:05',
                'updated_at' => '2020-05-30 03:48:06',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'our-partners',
                'slug' => 'our-partners',
                'content' => '<h1>Our Partners</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php277E.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-03-24 05:53:14',
                'updated_at' => '2020-05-30 03:58:55',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Chapter Leadership',
                'slug' => 'chapter-leadership',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 18,
                'page_type_id' => 0,
                'created_at' => '2020-04-08 02:53:35',
                'updated_at' => '2020-04-08 02:53:35',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'chapter-aboutus',
                'slug' => 'chapter-aboutus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 19,
                'page_type_id' => 0,
                'created_at' => '2020-04-17 01:22:37',
                'updated_at' => '2020-04-17 01:22:37',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'chapter-contactus',
                'slug' => 'chapter-contactus',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 20,
                'page_type_id' => 0,
                'created_at' => '2020-04-17 01:22:47',
                'updated_at' => '2020-04-17 01:22:47',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'dashboard-memberdirectory-detail',
                'slug' => 'dashboard-memberdirectory-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 21,
                'page_type_id' => 0,
                'created_at' => '2020-04-17 01:22:56',
                'updated_at' => '2020-04-17 01:22:56',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'dashboard-memberdirectory',
                'slug' => 'dashboard-memberdirectory',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 22,
                'page_type_id' => 0,
                'created_at' => '2020-04-17 01:23:06',
                'updated_at' => '2020-04-17 01:23:06',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'chapter-leadership-detail',
                'slug' => 'chapter-leadership-detail',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 23,
                'page_type_id' => 0,
                'created_at' => '2020-04-21 23:14:53',
                'updated_at' => '2020-04-21 23:14:53',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'dashboard-profile',
                'slug' => 'dashboard-profile',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 24,
                'page_type_id' => 0,
                'created_at' => '2020-05-09 01:15:51',
                'updated_at' => '2020-05-09 01:15:51',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'events-chapter',
                'slug' => 'events-chapter',
                'content' => '<h3>Chapter</h3>

<h1>Events</h1>
',
                'banner_image' => 'C:\\wamp64\\tmp\\php8996.tmp',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 25,
                'page_type_id' => 0,
                'created_at' => '2020-05-18 21:55:49',
                'updated_at' => '2020-05-30 04:06:59',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'support',
                'slug' => 'support',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 26,
                'page_type_id' => 0,
                'created_at' => '2020-05-21 03:50:40',
                'updated_at' => '2020-05-21 03:50:40',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'dashboard-events-login',
                'slug' => 'dashboard-events-login',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 27,
                'page_type_id' => 0,
                'created_at' => '2020-05-21 05:15:15',
                'updated_at' => '2020-05-21 05:15:15',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'dashboard-support',
                'slug' => 'dashboard-support',
                'content' => '',
                'banner_image' => '',
                'banner_description' => '',
                'is_active' => 1,
                'seo_meta_id' => 28,
                'page_type_id' => 0,
                'created_at' => '2020-05-29 23:11:28',
                'updated_at' => '2020-05-29 23:11:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}