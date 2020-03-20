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
        
        \DB::table('board_members')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Michael',
                'last_name' => 'Acevedo',
                'avatar' => NULL,
                'position' => 'Mortgage Committee Vice Chair',
                'bio' => '',
                'order' => 1,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:20:08',
                'updated_at' => '2020-03-19 19:20:08',
                'deleted_at' => NULL,
                'slug' => 'michael-acevedo',
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Bryan',
                'last_name' => 'Ahn',
                'avatar' => 'C:\\wamp64\\tmp\\phpFBCB.tmp',
                'position' => 'Board Member',
                'bio' => '',
                'order' => 2,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:21:32',
                'updated_at' => '2020-03-19 19:21:32',
                'deleted_at' => NULL,
                'slug' => 'bryan-ahn',
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Brian',
                'last_name' => 'Almero',
                'avatar' => 'C:\\wamp64\\tmp\\php6DD5.tmp',
                'position' => 'Las Vegas President',
                'bio' => '',
                'order' => 3,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:24:12',
                'updated_at' => '2020-03-19 19:24:12',
                'deleted_at' => NULL,
                'slug' => 'brian-almero',
            ),
            3 => 
            array (
                'id' => 4,
                'first_name' => 'Keith',
                'last_name' => 'Andrews',
                'avatar' => 'C:\\wamp64\\tmp\\php1A52.tmp',
                'position' => 'Greater Birmingham President',
                'bio' => '',
                'order' => 4,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:24:56',
                'updated_at' => '2020-03-19 19:24:56',
                'deleted_at' => NULL,
                'slug' => 'keith-andrews',
            ),
            4 => 
            array (
                'id' => 5,
                'first_name' => 'LC',
                'last_name' => 'Beh',
                'avatar' => 'C:\\wamp64\\tmp\\phpB75F.tmp',
                'position' => 'Greater Los Angeles President',
                'bio' => '',
                'order' => 5,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:25:36',
                'updated_at' => '2020-03-19 19:25:36',
                'deleted_at' => NULL,
                'slug' => 'lc-beh',
            ),
            5 => 
            array (
                'id' => 6,
                'first_name' => 'JC',
                'last_name' => 'Caceres',
                'avatar' => 'C:\\wamp64\\tmp\\php53AF.tmp',
                'position' => 'Greater Miami President',
                'bio' => '',
                'order' => 6,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:26:16',
                'updated_at' => '2020-03-19 19:26:16',
                'deleted_at' => NULL,
                'slug' => 'jc-caceres',
            ),
            6 => 
            array (
                'id' => 7,
                'first_name' => 'Kyle',
                'last_name' => 'Chan',
                'avatar' => 'C:\\wamp64\\tmp\\phpFA9F.tmp',
                'position' => 'Central New Jersey',
                'bio' => '',
                'order' => 7,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:26:59',
                'updated_at' => '2020-03-19 19:26:59',
                'deleted_at' => NULL,
                'slug' => 'kyle-chan',
            ),
            7 => 
            array (
                'id' => 8,
                'first_name' => 'Lynman',
                'last_name' => 'Chao',
                'avatar' => 'C:\\wamp64\\tmp\\phpAE8E.tmp',
                'position' => 'Membership Benefits Committee Vice-Chair/ San Francisco Peninsula',
                'bio' => '',
                'order' => 8,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:27:45',
                'updated_at' => '2020-03-19 19:27:45',
                'deleted_at' => NULL,
                'slug' => 'lynman-chao',
            ),
            8 => 
            array (
                'id' => 9,
                'first_name' => 'Stephen',
                'last_name' => 'Chow',
                'avatar' => 'C:\\wamp64\\tmp\\php41E6.tmp',
                'position' => 'Greater Toronto President',
                'bio' => '',
                'order' => 9,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:28:23',
                'updated_at' => '2020-03-19 19:28:23',
                'deleted_at' => NULL,
                'slug' => 'stephen-chow',
            ),
            9 => 
            array (
                'id' => 10,
                'first_name' => 'Gregg',
                'last_name' => 'Christensen',
                'avatar' => 'C:\\wamp64\\tmp\\phpDA3.tmp',
                'position' => 'New York Manhattan President',
                'bio' => '',
                'order' => 10,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:29:15',
                'updated_at' => '2020-03-19 19:29:15',
                'deleted_at' => NULL,
                'slug' => 'gregg-christensen',
            ),
            10 => 
            array (
                'id' => 11,
                'first_name' => 'Andy',
                'last_name' => 'Chung',
                'avatar' => 'C:\\wamp64\\tmp\\php134C.tmp',
                'position' => 'Silicon Valley President',
                'bio' => '',
                'order' => 11,
                'is_active' => 1,
                'type' => 2,
                'created_at' => '2020-03-19 19:30:22',
                'updated_at' => '2020-03-19 19:45:10',
                'deleted_at' => NULL,
                'slug' => 'andy-chung',
            ),
        ));
        
        
    }
}