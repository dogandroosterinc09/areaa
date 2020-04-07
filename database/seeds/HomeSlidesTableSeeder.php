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
                'content' => '<h1>The Voice of the AAPI community</h1>

<h2>Fulfilling the American Dream.</h2>
',
                'button_label' => 'Learn More',
                'button_link' => 'about-us',
                'is_active' => 1,
                'created_at' => '2020-04-06 21:08:39',
                'updated_at' => '2020-04-06 23:17:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Become a Partnership.',
                'background_image' => 'public/uploads/home_slide_images/hp-banner-img2-1586232607.jpg',
                'content' => '<h1>Become a</h1>

<h2>Partnership.</h2>
',
                'button_label' => 'Learn More',
                'button_link' => 'our-partners',
                'is_active' => 1,
                'created_at' => '2020-04-06 21:10:07',
                'updated_at' => '2020-04-06 23:17:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Events',
                'background_image' => 'public/uploads/home_slide_images/about-banner-1586232734.jpg',
                'content' => '<h1>The Voice of the AAPI community</h1>

<h2>Events</h2>
',
                'button_label' => 'Learn More',
                'button_link' => 'events',
                'is_active' => 1,
                'created_at' => '2020-04-06 21:12:14',
                'updated_at' => '2020-04-06 23:18:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}