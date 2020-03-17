<?php

use Illuminate\Database\Seeder;

class BoardMembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('board_members')->delete();
        
        
        
    }
}