<?php

use Illuminate\Database\Seeder;

class PageSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_sections')->delete();
        
        \DB::table('page_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'section' => 'ckeditor_sample',
                'content' => 'ckeditor sample content',
                'type' => 'ckeditor',
                'position' => 1,
                'created_at' => '2019-04-03 20:12:53',
                'updated_at' => '2019-04-18 13:58:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'section' => 'image_sample',
                'content' => 'public/images/dogandrooster_full_bg.jpg',
                'type' => 'file',
                'position' => 2,
                'created_at' => '2019-04-03 20:12:53',
                'updated_at' => '2019-04-18 13:58:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 1,
                'section' => 'input_sample',
                'content' => 'input sample field',
                'type' => 'input',
                'position' => 3,
                'created_at' => '2019-04-03 20:12:53',
                'updated_at' => '2019-04-18 13:58:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 1,
                'section' => 'textarea_sample',
                'content' => 'textarea sample field',
                'type' => 'textarea',
                'position' => 4,
                'created_at' => '2019-04-03 20:12:53',
                'updated_at' => '2019-04-18 13:58:49',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 9,
                'section' => 'banner_image',
                'content' => 'public/uploads/page_section_images/about-banner-1580448947.jpg',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-01-30 21:35:47',
                'updated_at' => '2020-01-30 21:35:47',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 9,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-01-30 21:35:47',
                'updated_at' => '2020-01-30 21:35:47',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 10,
                'section' => 'banner_image',
                'content' => '',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-01-30 21:36:25',
                'updated_at' => '2020-01-30 21:36:25',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'page_id' => 10,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-01-30 21:36:25',
                'updated_at' => '2020-01-30 21:36:25',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'page_id' => 11,
                'section' => 'banner_image',
                'content' => '',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-01-30 21:58:33',
                'updated_at' => '2020-01-30 21:58:33',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'page_id' => 11,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-01-30 21:58:33',
                'updated_at' => '2020-01-30 21:58:33',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'page_id' => 12,
                'section' => 'banner_image',
                'content' => '',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-02-03 23:12:26',
                'updated_at' => '2020-02-03 23:12:26',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'page_id' => 12,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-02-03 23:12:26',
                'updated_at' => '2020-02-03 23:12:26',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'page_id' => 13,
                'section' => 'banner_image',
                'content' => '',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-02-04 20:40:26',
                'updated_at' => '2020-02-04 20:40:26',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'page_id' => 13,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-02-04 20:40:26',
                'updated_at' => '2020-02-04 20:40:26',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'page_id' => 14,
                'section' => 'banner_image',
                'content' => '',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-02-19 22:38:32',
                'updated_at' => '2020-02-19 22:38:32',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'page_id' => 14,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-02-19 22:38:32',
                'updated_at' => '2020-02-19 22:38:32',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'page_id' => 15,
                'section' => 'banner_image',
                'content' => '',
                'type' => 'file',
                'position' => 1,
                'created_at' => '2020-02-20 21:39:09',
                'updated_at' => '2020-02-20 21:39:09',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'page_id' => 15,
                'section' => 'content',
                'content' => '',
                'type' => 'ckeditor',
                'position' => 2,
                'created_at' => '2020-02-20 21:39:09',
                'updated_at' => '2020-02-20 21:39:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}