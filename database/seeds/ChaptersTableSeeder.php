<?php

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapters')->delete();
        
        \DB::table('chapters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'thumbnail' => 'public/uploads/chapter-list1.jpg',
                'name' => 'Aloha',
                'slug' => 'aloha',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-04-02 05:57:22',
                'updated_at' => '2020-04-28 00:53:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'thumbnail' => 'public/uploads/chapter-list2.jpg',
                'name' => 'Atlanta Metro',
                'slug' => 'atlantametro',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-04-27 07:23:44',
                'updated_at' => '2020-04-28 00:53:42',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'thumbnail' => '0',
                'name' => 'Austin',
                'slug' => 'austin',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:31:23',
                'updated_at' => '2020-05-21 00:31:23',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'thumbnail' => '0',
                'name' => 'Boston',
                'slug' => 'boston',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:32:19',
                'updated_at' => '2020-05-21 00:32:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'thumbnail' => '0',
                'name' => 'Brooklyn',
                'slug' => 'brooklyn',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:32:30',
                'updated_at' => '2020-05-21 00:32:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'thumbnail' => '0',
                'name' => 'CA Orange County',
                'slug' => 'orangecounty',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:32:56',
                'updated_at' => '2020-05-21 00:32:56',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'thumbnail' => '0',
                'name' => 'Central New Jersey',
                'slug' => 'centralnewjersey',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:34:02',
                'updated_at' => '2020-05-21 00:34:02',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'thumbnail' => '0',
                'name' => 'Central Valley',
                'slug' => 'centralvalley',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:34:37',
                'updated_at' => '2020-05-21 00:34:37',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'thumbnail' => '0',
                'name' => 'Dallas/Fort Worth',
                'slug' => 'dfw',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:35:11',
                'updated_at' => '2020-05-21 00:35:11',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'thumbnail' => '0',
                'name' => 'DC Metro',
                'slug' => 'dcmetro',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:35:38',
                'updated_at' => '2020-05-21 00:35:38',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'thumbnail' => '0',
                'name' => 'Greater Birmingham',
                'slug' => 'greaterbirmingham',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:36:06',
                'updated_at' => '2020-05-21 00:36:06',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'thumbnail' => '0',
                'name' => 'Greater Chicago',
                'slug' => 'greaterchicago',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:37:21',
                'updated_at' => '2020-05-21 00:37:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'thumbnail' => '0',
                'name' => 'Greater Denver',
                'slug' => 'greaterdenver',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:37:54',
                'updated_at' => '2020-05-21 00:37:54',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'thumbnail' => '0',
                'name' => 'Greater East Bay',
                'slug' => 'greatereastbay',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:38:26',
                'updated_at' => '2020-05-21 00:38:26',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'thumbnail' => '0',
                'name' => 'Greater Jacksonville',
                'slug' => 'greaterjacksonville',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:38:51',
                'updated_at' => '2020-05-21 00:38:51',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'thumbnail' => '0',
                'name' => 'Greater Los Angeles',
                'slug' => 'greaterlosangeles',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:39:10',
                'updated_at' => '2020-05-21 00:39:10',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'thumbnail' => '0',
                'name' => 'Greater Miami',
                'slug' => 'greatermiami',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:39:32',
                'updated_at' => '2020-05-21 00:39:32',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'thumbnail' => '0',
                'name' => 'Greater Orlando',
                'slug' => 'greaterorlando',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:39:54',
                'updated_at' => '2020-05-21 00:39:54',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'thumbnail' => '0',
                'name' => 'Greater Phoenix',
                'slug' => 'greaterphoenix',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:40:15',
                'updated_at' => '2020-05-21 00:40:15',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'thumbnail' => '0',
                'name' => 'Greater Sacramento',
                'slug' => 'Greater Sacramento',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:40:33',
                'updated_at' => '2020-05-28 22:22:11',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'thumbnail' => '0',
                'name' => 'Greater Seattle',
                'slug' => 'greaterseattle',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:40:53',
                'updated_at' => '2020-05-21 00:40:53',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'thumbnail' => '0',
                'name' => 'Greater Tampa Bay',
                'slug' => 'greatertampabay',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:41:13',
                'updated_at' => '2020-05-21 00:41:13',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'thumbnail' => '0',
                'name' => 'Greater Toronto',
                'slug' => 'greatertoronto',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:41:35',
                'updated_at' => '2020-05-21 00:41:35',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'thumbnail' => '0',
                'name' => 'Houston',
                'slug' => 'houston',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:42:13',
                'updated_at' => '2020-05-21 00:42:13',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'thumbnail' => '0',
                'name' => 'Inland Empire',
                'slug' => 'inlandempire',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:42:42',
                'updated_at' => '2020-05-21 00:42:42',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'thumbnail' => '0',
                'name' => 'LA Coastal',
                'slug' => 'lacoastal',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:43:06',
                'updated_at' => '2020-05-21 00:43:06',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'thumbnail' => '0',
                'name' => 'Las Vegas',
                'slug' => 'lasvegas',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:43:25',
                'updated_at' => '2020-05-21 00:43:25',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'thumbnail' => '0',
                'name' => 'New York East',
                'slug' => 'newyorkeast',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:43:50',
                'updated_at' => '2020-05-21 00:43:50',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'thumbnail' => '0',
                'name' => 'New York Manhattan',
                'slug' => 'newyorkmanhattan',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:44:44',
                'updated_at' => '2020-05-21 00:44:44',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'thumbnail' => '0',
                'name' => 'North Los Angeles',
                'slug' => 'sfvsc',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:45:14',
                'updated_at' => '2020-05-21 00:45:14',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'thumbnail' => '0',
                'name' => 'Northern New Jersey',
                'slug' => 'northernnewjersey',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:45:40',
                'updated_at' => '2020-05-21 00:45:40',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'thumbnail' => '0',
                'name' => 'Portland',
                'slug' => 'portland',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:46:06',
                'updated_at' => '2020-05-21 00:46:06',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'thumbnail' => '0',
                'name' => 'San Antonio',
                'slug' => 'sanantonio',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:46:25',
                'updated_at' => '2020-05-21 00:46:25',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'thumbnail' => '0',
                'name' => 'San Diego',
                'slug' => 'sandiego',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:46:41',
                'updated_at' => '2020-05-21 00:46:41',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'thumbnail' => '0',
                'name' => 'San Francisco Peninsula',
                'slug' => 'sanfranciscopeninsula',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:47:01',
                'updated_at' => '2020-05-21 00:47:01',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'thumbnail' => '0',
                'name' => 'Silicon Valley',
                'slug' => 'siliconvalley',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:47:20',
                'updated_at' => '2020-05-21 00:47:20',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'thumbnail' => '0',
                'name' => 'Solano County',
                'slug' => 'solanocounty',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:47:45',
                'updated_at' => '2020-05-21 00:47:45',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'thumbnail' => '0',
                'name' => 'Tri-County',
                'slug' => 'tricounty',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:48:11',
                'updated_at' => '2020-05-21 00:48:11',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'thumbnail' => '0',
                'name' => 'Twin Cities',
                'slug' => 'twincities',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:48:28',
                'updated_at' => '2020-05-21 00:48:28',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'thumbnail' => '0',
                'name' => 'Vancouver',
                'slug' => 'vancouver',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:49:12',
                'updated_at' => '2020-05-21 00:49:12',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'thumbnail' => '0',
                'name' => 'Ventura County',
                'slug' => 'ventura-county',
                'latitude' => 0.0,
                'longitude' => 0.0,
                'created_at' => '2020-05-21 00:50:01',
                'updated_at' => '2020-05-30 01:53:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}