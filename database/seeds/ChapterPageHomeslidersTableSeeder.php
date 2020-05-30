<?php

use Illuminate\Database\Seeder;

class ChapterPageHomeslidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_page_homesliders')->delete();
        
        \DB::table('chapter_page_homesliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'name' => 'Fulfilling the American Dream.',
                'background_image' => 'public/uploads/homeslides/hp-banner-img1.jpg',
                'thumbnail_image' => 'public/uploads/homeslides/thumbnail/thumb-1.jpg',
                'thumbnail_text' => 'Wel-
come',
                'content' => '<h1>Welcome to AREAA<br />
Aloha Chapter</h1>

<h3>Educate. Empower. Expand together</h3>
',
                'button_label' => 'Join AREAA',
                'button_link' => '#',
                'is_active' => 1,
                'created_at' => '2020-04-24 03:59:04',
                'updated_at' => '2020-04-27 10:16:43',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'chapter_id' => 1,
                'name' => 'Events',
                'background_image' => 'public/uploads/homeslides/hp-banner-img2.jpg',
                'thumbnail_image' => 'public/uploads/homeslides/thumbnail/thumb-2.jpg',
                'thumbnail_text' => 'New',
                'content' => '<h1>Welcome to AREAA<br />
Aloha Chapter</h1>

<h3>News &amp; Events</h3>
',
                'button_label' => 'View More',
                'button_link' => '#',
                'is_active' => 1,
                'created_at' => '2020-04-24 04:00:34',
                'updated_at' => '2020-04-24 04:00:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'chapter_id' => 2,
                'name' => 'Atlanta Metro 1st Slide',
                'background_image' => '/tmp/phpV9pFU2',
                'thumbnail_image' => '/tmp/phpnTrB70',
                'thumbnail_text' => 'Welcome to AREAA Atlanta Metro ',
                'content' => '<h1>Welcome to AREAA<br />
Atlanta Metrp Chapter</h1>
',
                'button_label' => 'Join AREAA',
                'button_link' => 'http://52.24.144.212/areaa/atlantametro/login',
                'is_active' => 0,
                'created_at' => '2020-05-18 21:38:02',
                'updated_at' => '2020-05-26 06:48:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}