<?php

use Illuminate\Database\Seeder;

class ChapterPageAboutUsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_page_about_us')->delete();
        
        \DB::table('chapter_page_about_us')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'content' => '<h3>Learn More</h3>

<h1>About Us</h1>
',
                'banner_image' => '',
                'seo_meta_id' => 0,
                'section_1' => '{"featured_image":"public\\/uploads\\/chapter-about-image-1587432130.jpg","alt_text":"chapter title","title":"Our Story","content":"<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;<a href=\\"http:\\/\\/127.0.0.1\\/areaa\\/atlantametro-aboutus#\\">tempor incididunt ut labore<\\/a>&nbsp;et dolore magna aliqua. Ut enim ad minim veniam.<\\/h4>\\r\\n\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<\\/p>\\r\\n","button_text":"Join AREAA!","button_link":"#"}',
            'section_2' => '{"featured_image":"public\\/uploads\\/our-story-image-1587432130.jpg","alt_text":"chapter title","title":"AREAA National","content":"Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.","button_text":"Learn More","button_link":"#"}',
                'deleted_at' => NULL,
                'created_at' => '2020-04-15 21:34:14',
                'updated_at' => '2020-04-20 19:48:34',
            ),
        ));
        
        
    }
}