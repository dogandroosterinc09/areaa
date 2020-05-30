<?php

use Illuminate\Database\Seeder;

class AttachablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attachables')->delete();
        
        \DB::table('attachables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attachment_id' => 68,
                'attachable_id' => 2,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            1 => 
            array (
                'id' => 2,
                'attachment_id' => 69,
                'attachable_id' => 3,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            2 => 
            array (
                'id' => 3,
                'attachment_id' => 70,
                'attachable_id' => 4,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            3 => 
            array (
                'id' => 4,
                'attachment_id' => 71,
                'attachable_id' => 5,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            4 => 
            array (
                'id' => 5,
                'attachment_id' => 72,
                'attachable_id' => 6,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            5 => 
            array (
                'id' => 6,
                'attachment_id' => 73,
                'attachable_id' => 7,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            6 => 
            array (
                'id' => 7,
                'attachment_id' => 74,
                'attachable_id' => 8,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            7 => 
            array (
                'id' => 8,
                'attachment_id' => 75,
                'attachable_id' => 9,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            8 => 
            array (
                'id' => 9,
                'attachment_id' => 76,
                'attachable_id' => 10,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            9 => 
            array (
                'id' => 10,
                'attachment_id' => 77,
                'attachable_id' => 11,
                'attachable_type' => 'App\\Models\\BoardMember',
            ),
            10 => 
            array (
                'id' => 11,
                'attachment_id' => 78,
                'attachable_id' => 1,
                'attachable_type' => 'App\\Models\\Event',
            ),
            11 => 
            array (
                'id' => 12,
                'attachment_id' => 79,
                'attachable_id' => 1,
                'attachable_type' => 'App\\Models\\Event',
            ),
            12 => 
            array (
                'id' => 13,
                'attachment_id' => 80,
                'attachable_id' => 1,
                'attachable_type' => 'App\\Models\\ChapterHome',
            ),
            13 => 
            array (
                'id' => 14,
                'attachment_id' => 81,
                'attachable_id' => 3,
                'attachable_type' => 'App\\Models\\Event',
            ),
            14 => 
            array (
                'id' => 15,
                'attachment_id' => 82,
                'attachable_id' => 2,
                'attachable_type' => 'App\\Models\\ChapterEvent',
            ),
            15 => 
            array (
                'id' => 16,
                'attachment_id' => 83,
                'attachable_id' => 3,
                'attachable_type' => 'App\\Models\\ChapterEvent',
            ),
            16 => 
            array (
                'id' => 17,
                'attachment_id' => 84,
                'attachable_id' => 2,
                'attachable_type' => 'App\\Models\\ChapterEvent',
            ),
            17 => 
            array (
                'id' => 18,
                'attachment_id' => 85,
                'attachable_id' => 1,
                'attachable_type' => 'App\\Models\\ChapterEvent',
            ),
            18 => 
            array (
                'id' => 19,
                'attachment_id' => 86,
                'attachable_id' => 1,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            19 => 
            array (
                'id' => 20,
                'attachment_id' => 87,
                'attachable_id' => 1,
                'attachable_type' => 'App\\Models\\ChapterEvent',
            ),
            20 => 
            array (
                'id' => 21,
                'attachment_id' => 88,
                'attachable_id' => 2,
                'attachable_type' => 'App\\Models\\ChapterEvent',
            ),
            21 => 
            array (
                'id' => 22,
                'attachment_id' => 89,
                'attachable_id' => 3,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            22 => 
            array (
                'id' => 23,
                'attachment_id' => 90,
                'attachable_id' => 5,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            23 => 
            array (
                'id' => 24,
                'attachment_id' => 91,
                'attachable_id' => 6,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            24 => 
            array (
                'id' => 25,
                'attachment_id' => 92,
                'attachable_id' => 7,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            25 => 
            array (
                'id' => 26,
                'attachment_id' => 93,
                'attachable_id' => 8,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            26 => 
            array (
                'id' => 27,
                'attachment_id' => 94,
                'attachable_id' => 9,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            27 => 
            array (
                'id' => 28,
                'attachment_id' => 95,
                'attachable_id' => 10,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            28 => 
            array (
                'id' => 29,
                'attachment_id' => 96,
                'attachable_id' => 11,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            29 => 
            array (
                'id' => 30,
                'attachment_id' => 97,
                'attachable_id' => 12,
                'attachable_type' => 'App\\Models\\ChapterBoardMember',
            ),
            30 => 
            array (
                'id' => 31,
                'attachment_id' => 99,
                'attachable_id' => 20,
                'attachable_type' => 'App\\Models\\Page',
            ),
        ));
        
        
    }
}