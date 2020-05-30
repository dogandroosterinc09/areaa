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
                'title' => '2019 State of Asia Year-End Webinar',
                'assets' => '[{"title":"Presentation Slides","link":"#"}]',
                'tags' => 'Podcast, Test Tag',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-05 01:18:56',
                'updated_at' => '2020-05-28 06:34:49',
            ),
            1 => 
            array (
                'id' => 2,
                'link' => 'https://www.youtube.com/embed/cLLfmOeX16Y',
                'title' => '2019 State of Asia Year-End Webinar',
                'assets' => '[{"title":"Download Report","link":"http:\\/\\/52.24.144.212\\/areaa\\/"},{"title":"Presentation Slide","link":"http:\\/\\/52.24.144.212\\/areaa\\/"}]',
                'tags' => 'Podcast, Test Tag, Test Tag 2',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-14 04:19:52',
                'updated_at' => '2020-05-28 05:49:47',
            ),
            2 => 
            array (
                'id' => 3,
                'link' => 'https://www.ncbi.nlm.nih.gov/pubmed/22506599',
                'title' => '2019 State of Asia America Report',
                'assets' => '[{"title":"Download Report","link":"#"},{"title":"Download Presentation Slides","link":"#"}]',
                'tags' => 'test, video, podcast, ncbi',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-18 23:04:49',
                'updated_at' => '2020-05-28 05:55:54',
            ),
            3 => 
            array (
                'id' => 4,
                'link' => 'https://www.youtube.com/embed/cLLfmOeX16Y',
                'title' => '2018 Commercial Real Estate Outlook',
                'assets' => '[{"title":"Commercial Webinar Assets","link":"#"}]',
                'tags' => 'test, lorem ipsum, webinar',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-28 00:23:05',
                'updated_at' => '2020-05-28 06:01:07',
            ),
            4 => 
            array (
                'id' => 5,
                'link' => 'https://www.youtube.com/embed/cLLfmOeX16Y',
                'title' => '2019 Commercial Webinar: Opportunity Zones',
                'assets' => '[{"title":"2018 CRE Review","link":"#"},{"title":"Opportunity Zones Program","link":"#"}]',
                'tags' => 'tag',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-28 05:52:23',
                'updated_at' => '2020-05-28 05:59:09',
            ),
            5 => 
            array (
                'id' => 6,
                'link' => '#',
                'title' => '2017 Commercial Real Estate Outlook',
                'assets' => '[{"title":"Ten-x presentation","link":"#"},{"title":"RE\\/MAX Slide","link":"#"}]',
                'tags' => 'test',
                'media_category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-05-28 06:04:36',
                'updated_at' => '2020-05-28 06:29:23',
            ),
            6 => 
            array (
                'id' => 7,
                'link' => 'https://www.youtube.com/embed/cLLfmOeX16Y',
                'title' => '2019 Commercial Dealmaker',
                'assets' => '',
                'tags' => 'etst',
                'media_category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2020-05-28 06:05:09',
                'updated_at' => '2020-05-28 06:52:30',
            ),
            7 => 
            array (
                'id' => 8,
                'link' => '#',
                'title' => '2019 State of Asia Year-End Webinar',
                'assets' => '[{"title":"Opportunity Zones Program","link":"#"}]',
                'tags' => 'test',
                'media_category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2020-05-28 06:27:28',
                'updated_at' => '2020-05-28 06:32:12',
            ),
        ));
        
        
    }
}