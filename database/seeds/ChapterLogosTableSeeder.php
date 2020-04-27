<?php

use Illuminate\Database\Seeder;

class ChapterLogosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_logos')->delete();
        
        \DB::table('chapter_logos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'image' => 'public/uploads/logos/areaa_aloha.png',
                'deleted_at' => NULL,
                'created_at' => '2020-04-20 19:27:04',
                'updated_at' => '2020-04-20 22:56:26',
            ),
            1 => 
            array (
                'id' => 2,
                'chapter_id' => 2,
                'image' => 'public/uploads/logos/areaa_atlanta_metro.png',
                'deleted_at' => NULL,
                'created_at' => '2020-04-26 23:27:52',
                'updated_at' => '2020-04-26 23:27:52',
            ),
        ));
        
        
    }
}