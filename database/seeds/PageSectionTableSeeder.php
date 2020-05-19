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
                'id' => 17,
                'page_id' => 22,
                'section_id' => 18,
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 18,
                'page_id' => 22,
                'section_id' => 19,
                'order' => 1,
            ),
            2 => 
            array (
                'id' => 21,
                'page_id' => 1,
                'section_id' => 1,
                'order' => 1,
            ),
            3 => 
            array (
                'id' => 22,
                'page_id' => 1,
                'section_id' => 2,
                'order' => 1,
            ),
            4 => 
            array (
                'id' => 23,
                'page_id' => 1,
                'section_id' => 3,
                'order' => 1,
            ),
            5 => 
            array (
                'id' => 24,
                'page_id' => 1,
                'section_id' => 4,
                'order' => 1,
            ),
            6 => 
            array (
                'id' => 25,
                'page_id' => 1,
                'section_id' => 5,
                'order' => 1,
            ),
            7 => 
            array (
                'id' => 26,
                'page_id' => 1,
                'section_id' => 6,
                'order' => 1,
            ),
            8 => 
            array (
                'id' => 27,
                'page_id' => 1,
                'section_id' => 7,
                'order' => 1,
            ),
            9 => 
            array (
                'id' => 28,
                'page_id' => 1,
                'section_id' => 8,
                'order' => 1,
            ),
            10 => 
            array (
                'id' => 29,
                'page_id' => 1,
                'section_id' => 9,
                'order' => 1,
            ),
            11 => 
            array (
                'id' => 30,
                'page_id' => 2,
                'section_id' => 10,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 31,
                'page_id' => 2,
                'section_id' => 11,
                'order' => 1,
            ),
            13 => 
            array (
                'id' => 32,
                'page_id' => 2,
                'section_id' => 12,
                'order' => 1,
            ),
            14 => 
            array (
                'id' => 33,
                'page_id' => 2,
                'section_id' => 13,
                'order' => 1,
            ),
            15 => 
            array (
                'id' => 34,
                'page_id' => 2,
                'section_id' => 14,
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 35,
                'page_id' => 22,
                'section_id' => 15,
                'order' => 1,
            ),
            17 => 
            array (
                'id' => 36,
                'page_id' => 22,
                'section_id' => 16,
                'order' => 1,
            ),
            18 => 
            array (
                'id' => 37,
                'page_id' => 22,
                'section_id' => 17,
                'order' => 1,
            ),
            19 => 
            array (
                'id' => 38,
                'page_id' => 22,
                'section_id' => 20,
                'order' => 1,
            ),
            20 => 
            array (
                'id' => 39,
                'page_id' => 22,
                'section_id' => 21,
                'order' => 1,
            ),
            21 => 
            array (
                'id' => 40,
                'page_id' => 3,
                'section_id' => 22,
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 41,
                'page_id' => 17,
                'section_id' => 23,
                'order' => 1,
            ),
        ));
        
        
    }
}