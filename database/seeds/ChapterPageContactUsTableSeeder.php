<?php

use Illuminate\Database\Seeder;

class ChapterPageContactUsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_page_contact_us')->delete();
        
        \DB::table('chapter_page_contact_us')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'content' => '<h3>Have Questions?</h3>

<h1>Contact Us</h1>

<p>Lorem ipsum dolor sit amet, quam sollicitudin sagittis fringilla lacus enim, leo elit non nec varius sodales. Amet faucibus, id tempor quisque pharetra leo. Curae integer. Diam duis integer vel ut.</p>
',
                'banner_image' => '',
                'seo_meta_id' => 0,
                'section_1' => '{"location_icon":"loc","location_text":"3990 Old Town Avenue C304, San Diego, CA 92110","telephone_icon":"tel","telephone_text":"619.795.7873 ","telephone_link":"tel:619.795.7873","mail_icon":"mail","mail_text":"contact@areaa.org","mail_link":"mailto:contact@areaa.org"}',
                'deleted_at' => NULL,
                'created_at' => '2020-04-17 23:33:04',
                'updated_at' => '2020-04-18 00:00:40',
            ),
        ));
        
        
    }
}