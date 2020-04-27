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
                'section_1' => '{"location_icon":"loc","location_text":"Chapter President: Abe Lee","telephone_icon":"tel","telephone_text":"808-216-4999","telephone_link":"tel:8082164999","mail_icon":"mail","mail_text":"abelee1948@gmail.com","mail_link":"mailto:abelee1948@gmail.com"}',
                'deleted_at' => NULL,
                'created_at' => '2020-04-17 23:33:04',
                'updated_at' => '2020-04-20 22:57:40',
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