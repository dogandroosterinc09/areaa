<?php

use Illuminate\Database\Seeder;

class ChapterPageLeadershipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_page_leaderships')->delete();
        
        \DB::table('chapter_page_leaderships')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'content' => '<h3>Meet Our</h3>

<h1>Leadership<br />
Board</h1>
',
                'banner_image' => '',
                'seo_meta_id' => 0,
                'section_1' => '',
                'deleted_at' => NULL,
                'created_at' => '2020-04-17 23:14:37',
                'updated_at' => '2020-04-20 21:31:30',
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
                'created_at' => '2020-04-26 23:23:44',
                'updated_at' => '2020-04-26 23:23:44',
            ),
        ));
        
        
    }
}