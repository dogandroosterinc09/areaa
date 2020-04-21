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
            1 => 
            array (
                'id' => 2,
                'chapter_id' => 1,
                'first_name' => 'Thomas',
                'last_name' => 'Tay',
                'avatar' => NULL,
                'position' => 'Vice President',
                'bio' => '',
                'order' => 2,
                'is_active' => 1,
                'type' => 1,
                'slug' => 'thomas-tay',
                'created_at' => '2020-04-20 23:03:07',
                'updated_at' => '2020-04-20 23:03:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'chapter_id' => 1,
                'first_name' => 'Abe',
                'last_name' => 'Lee',
                'avatar' => NULL,
                'position' => 'Secretary',
                'bio' => '',
                'order' => 3,
                'is_active' => 1,
                'type' => 1,
                'slug' => 'abe-lee',
                'created_at' => '2020-04-20 23:05:52',
                'updated_at' => '2020-04-20 23:05:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'chapter_id' => 1,
                'first_name' => 'Sharon',
                'last_name' => 'Rasos',
                'avatar' => NULL,
                'position' => 'Treasurer',
                'bio' => '',
                'order' => 4,
                'is_active' => 1,
                'type' => 1,
                'slug' => 'sharon-rasos',
                'created_at' => '2020-04-20 23:06:42',
                'updated_at' => '2020-04-20 23:06:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}