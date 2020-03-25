<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '2020 Global Luxury Summit ',
                'thumbnail' => 'C:\\wamp64\\tmp\\phpA60A.tmp',
                'slug' => '2020-global-luxury-summit',
                'description' => 'Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis',
                'starts_at' => '2020-04-27 00:00:00',
                'ends_at' => '2020-04-29 00:00:00',
                'time' => '7:00am - 9:00am',
                'location_name' => 'Four Seasons Chicago',
                'city' => '120 E Delaware Pl, Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '70.00',
                'created_at' => '2020-03-25 15:46:15',
                'updated_at' => '2020-03-25 15:46:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '2021 Global Luxury Summit',
                'thumbnail' => '0',
                'slug' => '2021-global-luxury-summit',
                'description' => 'Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis',
                'starts_at' => '2021-04-27 00:00:00',
                'ends_at' => '2021-04-29 00:00:00',
                'time' => '7:00am - 9:00am',
                'location_name' => 'Four Seasons Chicago',
                'city' => '120 E Delaware Pl, Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '50.00',
                'created_at' => '2020-03-25 15:53:59',
                'updated_at' => '2020-03-25 16:38:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '2022 Global Luxury Summit',
                'thumbnail' => '0',
                'slug' => '2022-global-luxury-summit',
                'description' => 'Lorem ipsum dolor sit amet, dolor at ligula faucibus imperdiet libero, phasellus nulla sollicitudin in, libero nec venenatis, luctus pretium imperdiet volutpat sit atque. Porttitor ligula vitae ultrices eleifend, felis suscipit iaculis turpis',
                'starts_at' => '2022-04-27 00:00:00',
                'ends_at' => '2022-04-29 00:00:00',
                'time' => '7:00am - 9:00am',
                'location_name' => 'Four Seasons Chicago',
                'city' => '120 E Delaware Pl, Chicago',
                'state' => 'CA',
                'zip' => '60611',
                'country' => 'United States',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'amount' => '123.00',
                'created_at' => '2020-03-25 16:11:06',
                'updated_at' => '2020-03-25 16:40:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}