<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'programmer20@dogandrooster.com',
                'message' => 'No Reply: This is just a test message.',
                'created_at' => '2020-05-30 02:12:07',
                'updated_at' => '2020-05-30 02:12:07',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'programmer20@dogandrooster.com',
                'message' => 'NO REPLY: This is just a test message.',
                'created_at' => '2020-05-30 05:07:20',
                'updated_at' => '2020-05-30 05:07:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Mark',
                'last_name' => 'Villaflor',
                'email' => 'programmer20@dogandrooster.com',
                'message' => 'Test Message: 12:09',
                'created_at' => '2020-05-30 05:09:32',
                'updated_at' => '2020-05-30 05:09:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}