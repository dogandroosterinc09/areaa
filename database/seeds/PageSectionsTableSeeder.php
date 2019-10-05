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
        ));
        
        
    }
}