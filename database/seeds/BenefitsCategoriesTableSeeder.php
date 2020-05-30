<?php

use Illuminate\Database\Seeder;

class BenefitsCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('benefits_categories')->delete();
        
        \DB::table('benefits_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Travel & Automotive',
                'deleted_at' => NULL,
                'created_at' => '2020-05-29 22:19:16',
                'updated_at' => '2020-05-29 22:19:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Risk Management',
                'deleted_at' => NULL,
                'created_at' => '2020-05-29 22:24:35',
                'updated_at' => '2020-05-29 22:24:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Office Supplies & Services',
                'deleted_at' => NULL,
                'created_at' => '2020-05-29 22:24:48',
                'updated_at' => '2020-05-29 22:24:48',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Transaction Management',
                'deleted_at' => NULL,
                'created_at' => '2020-05-29 22:25:35',
                'updated_at' => '2020-05-29 22:25:35',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Marketing Tools',
                'deleted_at' => NULL,
                'created_at' => '2020-05-29 22:25:43',
                'updated_at' => '2020-05-29 22:25:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Gifting',
                'deleted_at' => NULL,
                'created_at' => '2020-05-29 22:25:50',
                'updated_at' => '2020-05-29 22:25:50',
            ),
        ));
        
        
    }
}