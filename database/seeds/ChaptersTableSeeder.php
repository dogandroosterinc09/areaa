<?php

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapters')->delete();
        
        \DB::table('chapters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'thumbnail' => '0',
                'name' => 'Aloha',
                'slug' => 'aloha',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-04-01 21:57:22',
                'updated_at' => '2020-04-01 21:57:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}