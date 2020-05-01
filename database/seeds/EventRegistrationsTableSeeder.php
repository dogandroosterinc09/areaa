<?php

use Illuminate\Database\Seeder;

class EventRegistrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_registrations')->delete();
        
        \DB::table('event_registrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'member_id' => NULL,
                'event_id' => 3,
                'chapter_event_id' => 0,
                'event_chapter_id' => 0,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@email.com',
                'phone' => '8888',
                'is_member' => 1,
                'status' => 0,
                'member_chapter_id' => 1,
                'created_at' => '2020-04-28 02:09:13',
                'updated_at' => '2020-04-28 02:09:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}