<?php

use Illuminate\Database\Seeder;

class MediaCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media_categories')->delete();
        
        \DB::table('media_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Webinar',
                'deleted_at' => NULL,
                'created_at' => '2020-04-10 05:03:35',
                'updated_at' => '2020-04-10 05:17:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Podcast',
                'deleted_at' => NULL,
                'created_at' => '2020-04-10 08:25:41',
                'updated_at' => '2020-04-10 08:25:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Research & Reports',
                'deleted_at' => NULL,
                'created_at' => '2020-04-10 08:26:02',
                'updated_at' => '2020-04-10 08:26:02',
            ),
        ));
        
        
    }
}