<?php

use Illuminate\Database\Seeder;

class WebinarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('webinars')->delete();
        
        \DB::table('webinars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'link' => 'https://www.youtube.com/embed/cLLfmOeX16Y',
                'title' => 'Testing Webinar',
                'tags' => 'Podcast, Test Tag',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-05 01:18:56',
                'updated_at' => '2020-05-14 07:53:38',
            ),
            1 => 
            array (
                'id' => 2,
                'link' => 'https://www.youtube.com/embed/cLLfmOeX16Y',
                'title' => '2019 State of Asia Year-End Webinar',
                'tags' => 'Podcast, Test Tag, Test Tag 2',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-14 04:19:52',
                'updated_at' => '2020-05-14 07:54:23',
            ),
        ));
        
        
    }
}