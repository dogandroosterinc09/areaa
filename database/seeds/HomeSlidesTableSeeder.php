<?php

use Illuminate\Database\Seeder;

class HomeSlidesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_slides')->delete();
        
        \DB::table('home_slides')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fulfilling the American Dream.',
                'background_image' => 'public/uploads/home_slide_images/hp-banner-img1-1586232519.jpg',
                'thumbnail_image' => 'public/uploads/homeslides/thumbnail/thumb-1.jpg',
                'thumbnail_text' => 'Mem-
bership',
                'content' => '<h1>The Voice of the AAPI community</h1>

<h2>Fulfilling the American Dream.</h2>
',
                'button_label' => 'Learn More',
                'button_link' => 'http://52.24.144.212/areaa/about-us',
                'is_active' => 1,
                'created_at' => '2020-04-07 05:08:39',
                'updated_at' => '2020-04-27 10:55:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Become a Partner.',
                'background_image' => 'public/uploads/home_slide_images/hp-banner-img2-1586232607.jpg',
                'thumbnail_image' => 'public/uploads/homeslides/thumbnail/thumb-2.jpg',
                'thumbnail_text' => 'Part-
nership',
                'content' => '<h1>Become a</h1>

<h2>Partner.</h2>
',
                'button_label' => 'Learn More',
                'button_link' => 'http://52.24.144.212/areaa/our-partners',
                'is_active' => 1,
                'created_at' => '2020-04-07 05:10:07',
                'updated_at' => '2020-04-28 02:39:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Events',
                'background_image' => 'public/uploads/home_slide_images/about-banner-1586232734.jpg',
                'thumbnail_image' => 'public/uploads/homeslides/thumbnail/thumb-3.jpg',
                'thumbnail_text' => 'Events',
                'content' => '<h1>The Voice of the AAPI community</h1>

<h2>Events</h2>
',
                'button_label' => 'Learn More',
                'button_link' => 'http://52.24.144.212/areaa/events',
                'is_active' => 1,
                'created_at' => '2020-04-07 05:12:14',
                'updated_at' => '2020-04-27 10:56:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Test Home slide',
                'background_image' => 'public/uploads/home_slide_images/hp-banner-img2-1587980641.jpg',
                'thumbnail_image' => 'public/uploads/homeslides/thumbnail/thumb-3.jpg',
                'thumbnail_text' => 'test',
                'content' => 'test',
                'button_label' => '#',
                'button_link' => '#',
                'is_active' => 1,
                'created_at' => '2020-04-27 10:44:01',
                'updated_at' => '2020-04-27 10:52:47',
                'deleted_at' => '2020-04-27 10:52:47',
            ),
        ));
        
        
    }
}