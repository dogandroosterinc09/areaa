<?php

use Illuminate\Database\Seeder;

class ChapterEventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_events')->delete();
        
        \DB::table('chapter_events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'name' => '2020 Installation Celebration',
                'thumbnail' => '0',
                'slug' => '2020-installation-celebration',
                'description' => 'Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis',
                'starts_at' => '2020-04-04 10:01:53',
                'ends_at' => '2020-04-04 00:00:00',
                'time' => '6:00 pm - 9:00 pm',
                'location_name' => 'Four Seasons Chicago',
                'city' => '120 E Delaware Pl, Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '0.00',
                'created_at' => '2020-04-03 18:06:49',
                'updated_at' => '2020-04-03 19:01:53',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}