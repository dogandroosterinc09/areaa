<?php

use Illuminate\Database\Seeder;

class ChapterBoardMembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_board_members')->delete();
        
        \DB::table('chapter_board_members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'first_name' => 'Ronda',
                'last_name' => 'Ching-Day',
                'avatar' => 'C:\\wamp64\\tmp\\php3877.tmp',
                'position' => 'President',
                'bio' => '',
                'order' => 1,
                'is_active' => 1,
                'type' => 1,
                'slug' => 'ronda-ching-day',
                'created_at' => '2020-04-07 18:01:09',
                'updated_at' => '2020-04-07 18:32:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}