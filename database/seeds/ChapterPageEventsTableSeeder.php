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
                'created_at' => '2020-04-16 18:20:01',
                'updated_at' => '2020-04-20 19:49:38',
            ),
        ));
        
        
    }
}