<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'title' => '2019 State of Asia Year-End Webinar',
                'description' => 'Lorem ipsum dolor sit amet, a aliquam at. Egestas aliquam. Dignissim ridiculus, metus sit risus pulvinar duis commodo, condimentum massa neque dui urna mi sed. Sed duis lacinia ac felis elit, morbi lobortis leo vestibulum sapien tellus varius, amet ea nunc integer arcu, mauris pulvinar, arcu leo aliquet fuga sed. In ligula nisl non ut luctus neque. Aliquam ridiculus eget in porttitor, et justo, ut luctus a felis, scelerisque magna. Vestibulum magnis viverra eu aliquam. Amet vel erat in lorem id id, mi et, nec facilisis porta nullam sed nec cum. Integer pharetra et praesent habitasse dolor, mi pede suspendisse sed nec varius, duis fusce etiam ante orci eu.',
                'thumbnail' => '',
                'photos' => 'public/uploads/gallery/5eaa7a5042f65_photo2.jpg,public/uploads/gallery/5eaa7a5042f16_photo1.jpg',
                'created_at' => '2020-04-30 05:49:00',
                'updated_at' => '2020-04-30 08:12:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'title' => '2020 State of Asia Year-End Webinar',
                'description' => 'Lorem ipsum dolor sit amet, a aliquam at. Egestas aliquam. Dignissim ridiculus, metus sit risus pulvinar duis commodo, condimentum massa neque dui urna mi sed. Sed duis lacinia ac felis elit, morbi lobortis leo vestibulum sapien tellus varius, amet ea nunc integer arcu, mauris pulvinar, arcu leo aliquet fuga sed. In ligula nisl non ut luctus neque. Aliquam ridiculus eget in porttitor, et justo, ut luctus a felis, scelerisque magna. Vestibulum magnis viverra eu aliquam. Amet vel erat in lorem id id, mi et, nec facilisis porta nullam sed nec cum. Integer pharetra et praesent habitasse dolor, mi pede suspendisse sed nec varius, duis fusce etiam ante orci eu.',
                'thumbnail' => '',
                'photos' => 'public/uploads/gallery/5eaa7a6c9b671_photo4.jpg,public/uploads/gallery/5eaa7a6c9b60b_photo3.jpg',
                'created_at' => '2020-04-30 06:02:59',
                'updated_at' => '2020-04-30 08:12:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'title' => '2021 State of Asia Year-End Webinar',
                'description' => 'Lorem ipsum dolor sit amet, a aliquam at. Egestas aliquam. Dignissim ridiculus, metus sit risus pulvinar duis commodo, condimentum massa neque dui urna mi sed. Sed duis lacinia ac felis elit, morbi lobortis leo vestibulum sapien tellus varius, amet ea nunc integer arcu, mauris pulvinar, arcu leo aliquet fuga sed. In ligula nisl non ut luctus neque. Aliquam ridiculus eget in porttitor, et justo, ut luctus a felis, scelerisque magna. Vestibulum magnis viverra eu aliquam. Amet vel erat in lorem id id, mi et, nec facilisis porta nullam sed nec cum. Integer pharetra et praesent habitasse dolor, mi pede suspendisse sed nec varius, duis fusce etiam ante orci eu.',
                'thumbnail' => '',
                'photos' => 'public/uploads/gallery/5eaa7a82a2d4b_photo6.jpg,public/uploads/gallery/5eaa7a82a2d08_photo5.jpg,public/uploads/gallery/5eaa7a82d2e63_photo7.jpg',
                'created_at' => '2020-04-30 06:41:06',
                'updated_at' => '2020-04-30 08:13:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}