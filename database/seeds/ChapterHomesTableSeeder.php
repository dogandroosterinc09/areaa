<?php

use Illuminate\Database\Seeder;

class ChapterHomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chapter_homes')->delete();
        
        \DB::table('chapter_homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chapter_id' => 1,
                'content' => '',
                'banner_image' => '',
                'seo_meta_id' => 0,
                'who_we_are_title' => 'Who We Are',
                'who_we_are_featured_image' => '',
                'who_we_are_featured_image_alt' => '',
            'who_we_are_content' => '<p>With over&nbsp;<strong><a href="http://127.0.0.1/areaa/chapter-homepage#">17,000 members</a></strong>&nbsp;in<a href="http://127.0.0.1/areaa/chapter-homepage#">&nbsp;<strong>41 chapters</strong>&nbsp;</a>across the US and Canada, AREAA&nbsp;<strong>is the largest Asian American and Pacific Islander (AAPI) trade organization in North America.</strong></p>

<p>As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</p>
',
                'who_we_are_button1_text' => 'Join Us',
                'who_we_are_button1_link' => '#',
                'who_we_are_button2_text' => 'Contact Us',
                'who_we_are_button2_link' => '#',
                'member_benefits_title' => 'Member Benefits',
                'member_benefits_featured_image' => 'public/uploads/chapter-image-1587436801.jpg',
                'member_benefits_featured_image_alt' => '',
                'member_benefits_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                'member_benefits_items' => '["Lorem ipsum dolor sit amet&nbsp;<strong>CONSECTETUR<\\/strong>&nbsp;adipisicing","Aipisicing elit,&nbsp;<strong>SED DO EIUSMOD TEMPOR<\\/strong>&nbsp;incididunt ut labore et","<strong>EIUSMOD&nbsp;<\\/strong>tempor incididunt ut labore et dolore magna aliqua"]',
                'member_benefits_button1_text' => 'Join Us',
                'member_benefits_button1_link' => '#',
                'member_benefits_button2_text' => 'Contact Us',
                'member_benefits_button2_link' => '#',
                'sponsors_title' => 'Sponsors',
                'sponsors_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'sponsors_button1_text' => 'Interested In Sponsorship?',
                'sponsors_button1_link' => '#',
                'sponsors_filters' => '[{"icon":"jade","text":"Jade","link":"#"},{"icon":"diamond","text":"Diamond","link":"#"},{"icon":"emerald","text":"Emerald","link":"#"},{"icon":"opal","text":"Opal","link":"#"},{"icon":"ruby","text":"Ruby","link":"#"},{"icon":"pearl","text":"Pearl","link":"#"}]',
                'top_sponsor' => '{"badge_icon":"jade","image":"public\\/uploads\\/sponsor0-1587071957.jpg","image_alt":"chapter title"}',
                'other_sponsors' => '[{"badge_icon":"ruby","image":"public\\/uploads\\/sponsor1-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"emerald","image":"public\\/uploads\\/sponsor2-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\\/uploads\\/sponsor3-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\\/uploads\\/sponsor4-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\\/uploads\\/sponsor5-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\\/uploads\\/sponsor6-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\\/uploads\\/sponsor7-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\\/uploads\\/sponsor9-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"jade","image":"public\\/uploads\\/sponsor8-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\\/uploads\\/sponsor10-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\\/uploads\\/sponsor11-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\\/uploads\\/sponsor12-1587073636.jpg","image_alt":"chapter title"}]',
                'deleted_at' => NULL,
                'created_at' => '2020-04-01 21:57:22',
                'updated_at' => '2020-04-21 00:24:12',
            ),
        ));
        
        
    }
}