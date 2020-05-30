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
                'created_at' => '2020-04-28 10:09:13',
                'updated_at' => '2020-04-28 10:09:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'member_id' => NULL,
                'event_id' => 1,
                'chapter_event_id' => 0,
                'event_chapter_id' => 0,
                'first_name' => 'Jane TEST',
                'last_name' => 'Doe',
                'email' => 'diteci@mailinator.com',
            'phone' => '+1 (948) 103-8216',
                'is_member' => 0,
                'status' => 0,
                'member_chapter_id' => 36,
                'created_at' => '2020-05-29 23:13:59',
                'updated_at' => '2020-05-29 23:13:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}