<?php

use Illuminate\Database\Seeder;

class SeoMetasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seo_metas')->delete();
        
        \DB::table('seo_metas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'meta_title' => 'Home',
                'meta_keywords' => 'Home',
                'meta_description' => 'Home',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'meta_title' => 'About Us',
                'meta_keywords' => 'About Us',
                'meta_description' => 'About Us',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'meta_title' => 'Contact Us',
                'meta_keywords' => 'Contact Us',
                'meta_description' => 'Contact Us',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'meta_title' => 'Page Not Found',
                'meta_keywords' => 'Page Not Found',
                'meta_description' => 'Page Not Found',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'meta_title' => 'Login',
                'meta_keywords' => 'Login',
                'meta_description' => 'Login',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'meta_title' => 'Register',
                'meta_keywords' => 'Register',
                'meta_description' => 'Register',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'meta_title' => 'Forgot Password',
                'meta_keywords' => 'Forgot Password',
                'meta_description' => 'Forgot Password',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'meta_title' => 'Reset Password',
                'meta_keywords' => 'Reset Password',
                'meta_description' => 'Reset Password',
                'canonical_link' => '',
                'created_at' => '2019-10-04 22:04:34',
                'updated_at' => '2019-10-04 22:04:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-01-30 21:35:47',
                'updated_at' => '2020-01-30 21:35:47',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-01-30 21:36:25',
                'updated_at' => '2020-01-30 21:36:25',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-01-30 21:58:33',
                'updated_at' => '2020-01-30 21:58:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-02-03 23:12:26',
                'updated_at' => '2020-02-03 23:12:26',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-02-04 20:40:26',
                'updated_at' => '2020-02-04 20:40:26',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-02-19 22:38:32',
                'updated_at' => '2020-02-19 22:38:32',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'canonical_link' => '',
                'created_at' => '2020-02-20 21:39:09',
                'updated_at' => '2020-02-20 21:39:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}