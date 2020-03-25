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
        ));
        
        
    }
}