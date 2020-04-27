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
                'name' => ' 2020 Installation Celebration',
                'thumbnail' => 'C:\\wamp64\\tmp\\php87E7.tmp',
                'slug' => '2020-installation-celebration',
                'description' => 'Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis',
                'starts_at' => '2020-04-18 00:00:00',
                'ends_at' => '2020-01-09 00:00:00',
                'time' => '6:00 pm - 9:00 pm',
                'location_name' => 'Four Seasons Chicago',
                'city' => '120 E Delaware Pl, Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '0.00',
                'created_at' => '2020-04-07 16:36:35',
                'updated_at' => '2020-04-17 22:49:54',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'chapter_id' => 1,
                'name' => 'State of Asia Report & Updates',
                'thumbnail' => 'C:\\wamp64\\tmp\\phpB997.tmp',
                'slug' => 'state-of-asia-report-updates',
                'description' => 'Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis',
                'starts_at' => '2020-04-18 00:00:00',
                'ends_at' => '2020-02-22 00:00:00',
                'time' => '1:30 pm - 4:00 pm',
                'location_name' => 'Four Seasons Chicago',
                'city' => '120 E Delaware Pl, Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '0.00',
                'created_at' => '2020-04-07 16:37:23',
                'updated_at' => '2020-04-17 22:50:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'chapter_id' => 2,
                'name' => '2020 Global Luxury Summit',
                'thumbnail' => '83',
                'slug' => '2020-global-luxury-summit',
                'description' => 'Description',
                'starts_at' => '2020-04-27 00:00:00',
                'ends_at' => '2020-04-27 00:00:00',
                'time' => '7:00am - 9:00am',
                'location_name' => 'Four Seasons Chicago',
                'city' => 'Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '0.00',
                'created_at' => '2020-04-26 23:09:25',
                'updated_at' => '2020-04-27 01:10:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}