<?php

use Illuminate\Database\Seeder;

class UserHasRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_has_roles')->delete();
        
        \DB::table('user_has_roles')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'model_type' => 'App\\Models\\User',
                'user_id' => 1,
            ),
            1 => 
            array (
                'role_id' => 2,
                'model_type' => 'App\\Models\\User',
                'user_id' => 2,
            ),
            2 => 
            array (
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'user_id' => 3,
            ),
            3 => 
            array (
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'user_id' => 14,
            ),
            4 => 
            array (
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'user_id' => 15,
            ),
            5 => 
            array (
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'user_id' => 16,
            ),
            6 => 
            array (
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'user_id' => 17,
            ),
            7 => 
            array (
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'user_id' => 18,
            ),
            8 => 
            array (
                'role_id' => 4,
                'model_type' => 'App\\Models\\User',
                'user_id' => 4,
            ),
        ));
        
        
    }
}