<?php

use Illuminate\Database\Seeder;

class ChapterContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_contacts')->delete();
        
        \DB::table('chapter_contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'first_name' => 'Kiara TEST',
                'last_name' => 'Lowe',
                'email' => 'frontend1@dogandrooster.com',
                'message' => 'Laudantium sed repr',
                'created_at' => '2020-05-30 02:08:10',
                'updated_at' => '2020-05-30 02:08:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}