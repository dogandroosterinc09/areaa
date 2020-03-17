<?php

use Illuminate\Database\Seeder;

class PageSectionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_section')->delete();
        
        \DB::table('page_section')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 2,
                'section_id' => 1,
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 2,
                'section_id' => 2,
                'order' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 2,
                'section_id' => 3,
                'order' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 2,
                'section_id' => 4,
                'order' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 2,
                'section_id' => 5,
                'order' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 2,
                'section_id' => 7,
                'order' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'page_id' => 22,
                'section_id' => 8,
                'order' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'page_id' => 22,
                'section_id' => 9,
                'order' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'page_id' => 22,
                'section_id' => 10,
                'order' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'page_id' => 1,
                'section_id' => 11,
                'order' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'page_id' => 1,
                'section_id' => 12,
                'order' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'page_id' => 1,
                'section_id' => 13,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'page_id' => 1,
                'section_id' => 14,
                'order' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'page_id' => 1,
                'section_id' => 15,
                'order' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'page_id' => 1,
                'section_id' => 16,
                'order' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'page_id' => 1,
                'section_id' => 17,
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'page_id' => 22,
                'section_id' => 18,
                'order' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'page_id' => 22,
                'section_id' => 19,
                'order' => 1,
            ),
        ));
        
        
    }
}