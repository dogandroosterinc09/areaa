<?php

use Illuminate\Database\Seeder;

class ChapterPageEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_page_events')->delete();
        
        \DB::table('chapter_page_events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'content' => '<h1>Events</h1>
',
                'banner_image' => '',
                'seo_meta_id' => 0,
                'section_1' => '',
                'deleted_at' => NULL,
                'created_at' => '2020-04-17 02:20:01',
                'updated_at' => '2020-04-21 03:49:38',
            ),
            1 => 
            array (
                'id' => 2,
                'chapter_id' => 2,
                'content' => '',
                'banner_image' => '',
                'seo_meta_id' => 0,
                'section_1' => '',
                'deleted_at' => NULL,
                'created_at' => '2020-04-27 07:23:44',
                'updated_at' => '2020-04-27 07:23:44',
            ),
        ));
        
        
    }
}