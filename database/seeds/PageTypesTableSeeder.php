<?php

use Illuminate\Database\Seeder;

class PageTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_types')->delete();
        
        \DB::table('page_types')->insert(array (
            0 => 
            array (
                'name' => 'Home',
            ),
            1 =>
            array (
                'name' => 'Page',
            ),
            3 =>
            array (
                'name' => 'Contact',
            ),
        ));
        
        
    }
}