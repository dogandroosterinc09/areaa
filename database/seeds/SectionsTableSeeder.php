<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Become a Member',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Alt Text","type":"text","alias":"alt_text"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"17","alt_text":"Members Image","title":"Become a Member","content":"<p><span style=\\"font-size:18px;\\">With over&nbsp;<span style=\\"color:#ab1a2d;\\"><b>17,000 members</b></span>&nbsp;in&nbsp;<span style=\\"color:#ab1a2d;\\"><b>41 chapters</b></span>&nbsp;across the US and Canada, AREAA is&nbsp;<b>the largest Asian American and Pacific Islander (AAPI) trade organization in North America</b>.</span></p>\\n\\n<p><span style=\\"font-size:16px;\\">As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</span></p>\\n","btn1_text":"Learn More","btn1_link":"http://52.24.144.212/areaa/areabenefits","btn2_text":"Become a Member","btn2_link":"http://52.24.144.212/areaa/membership-registration"}]}',
                'created_at' => '2020-03-17 23:37:49',
                'updated_at' => '2020-03-24 22:19:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Member Count',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Count","type":"numeric"},{"name":"Title","type":"text"},{"name":"Sub Text","type":"text","alias":"sub_text"}],"data":[{"count":"17000","title":"MEMBERS","sub_text":"& GROWING"},{"count":"41","title":"CHAPTERS","sub_text":""},{"count":"51","title":"ETHNICITIES","sub_text":"REPRESENTED"},{"count":"26","title":"LANGUAGES","sub_text":"SPOKEN"}]}',
                'created_at' => '2020-03-17 23:39:06',
                'updated_at' => '2020-03-18 00:35:42',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Partnership',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Alt Text","type":"text","alias":"alt_text"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"19","alt_text":"Partnership BG","title":"Partnership","content":"We have more than 30 partners fromLocal to International.","btn1_text":"Learn More","btn1_link":"http://52.24.144.212/areaa/our-partners","btn2_text":"Become a Member","btn2_link":"http://52.24.144.212/areaa/membership-registration"}]}',
                'created_at' => '2020-03-17 23:41:27',
                'updated_at' => '2020-03-24 22:07:20',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Partnership Levels',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Icon","type":"text"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"}],"data":[{"icon":"jade","title":"JADE LEVEL","content":"Lorem ipsum dolor sit amet, consectetur adipisi."},{"icon":"diamond","title":"DIAMOND LEVEL","content":"Lorem ipsum dolor sit amet, consectetur adipisi."},{"icon":"emerald","title":"EMERALD LEVEL","content":"Lorem ipsum dolor sit amet, consectetur adipisi."}]}',
                'created_at' => '2020-03-17 23:42:45',
                'updated_at' => '2020-03-18 02:24:14',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Growing Opportunities',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Alt Text","type":"text","alias":"alt_text"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"20","alt_text":"Statline Image","title":"Growing Opportunities","content":"<span style=\\"font-size:18px;\\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut<br />\\nlabore et dolore magna aliqua. Ut enim ad minim veniam.</span>","btn1_text":"Learn More","btn1_link":"http://52.24.144.212/areaa/areabenefits","btn2_text":"Become a Member","btn2_link":"http://52.24.144.212/areaa/membership-registration"}]}',
                'created_at' => '2020-03-17 23:44:28',
                'updated_at' => '2020-03-24 22:19:26',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Growing Opportunities List Items',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Content","type":"editor"}],"data":[{"content":"<p>Asian American population is&nbsp;<b>22.5 million</b></p>\\n"},{"content":"<p><b>72% population growth</b>&nbsp;from 2000 to 2015</p>\\n"},{"content":"<p>By&nbsp;<b>2060</b>, there is going to be&nbsp;<b>100% increase</b>&nbsp;in this number</p>\\n"},{"content":"<p><b>Chinese, Indian</b>&nbsp;and&nbsp;<b>Filipino</b>&nbsp;for&nbsp;<b>57%</b>&nbsp;of the Asian Americans</p>\\n"},{"content":"<p><b>The buying power</b>&nbsp;of this group is said to&nbsp;<b>exceed $1 trillion</b>&nbsp;with a&nbsp;<b>33% increase by 2022</b></p>\\n"}]}',
                'created_at' => '2020-03-17 23:52:10',
                'updated_at' => '2020-03-18 00:54:47',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Featured Members',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"},{"name":"Content","type":"textarea"}],"data":[{"title":"Featured Members","content":"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."}]}',
                'created_at' => '2020-03-17 23:55:44',
                'updated_at' => '2020-03-18 00:54:47',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Featured Sponsors',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"}],"data":[{"title":"Sponsors"}]}',
                'created_at' => '2020-03-17 23:58:31',
                'updated_at' => '2020-03-18 00:54:47',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Sponsors Images',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Image","type":"attachment"},{"name":"Alt Text","type":"text","alias":"alt_text"}],"data":[{"image":"21","alt_text":"Sponsors Image"},{"image":"22","alt_text":"Sponsors Image"},{"image":"23","alt_text":"Sponsors Image"},{"image":"24","alt_text":"Sponsors Image"},{"image":"25","alt_text":"Sponsors Image"},{"image":"28","alt_text":"Sponsors Image"},{"image":"29","alt_text":"Sponsors Image"}]}',
                'created_at' => '2020-03-18 00:00:20',
                'updated_at' => '2020-03-18 01:10:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Our Mission',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Alt Text","type":"text","alias":"alt_text"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button Text","type":"text","alias":"btn_text"},{"name":"Button Link","type":"text","alias":"btn_link"}],"data":[{"image":"30","alt_text":"","title":"Our Mission","content":"AREAA is dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.","btn_text":"Join AaREAA!","btn_link":"http://52.24.144.212/areaa/membership-registration"}]}',
                'created_at' => '2020-03-18 00:02:47',
                'updated_at' => '2020-03-24 04:42:08',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Our Story',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Alt Text","type":"text","alias":"alt_text"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"}],"data":[{"image":"31","alt_text":"","title":"Our Story","content":"Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market."}]}',
                'created_at' => '2020-03-18 00:03:41',
                'updated_at' => '2020-03-19 01:36:19',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Goals',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"}],"data":[{"title":"AREAA Will Accomplish These Goals By:"}]}',
                'created_at' => '2020-03-18 00:04:38',
                'updated_at' => '2020-03-18 01:24:14',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Goals List Items',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Content","type":"editor"}],"data":[{"content":"<strong>CREATING A POWERFUL NATIONAL VOICE&nbsp;</strong>for housing &amp; real estate professionals that serve this dynamic market."},{"content":"<strong>ADVOCATING FOR POLICY POSITIONS&nbsp;</strong>at the national level that will reduce barriers to homeownership for the AAPI community."},{"content":"<strong>INCREASING BUSINESS OPPORTUNITIES&nbsp;</strong>for mortgage &amp; real estate professionals that serve this growing community."},{"content":"<strong>HOSTING NATIONAL AND LOCAL EVENTS&nbsp;</strong>to educate &amp; inform members about housing issues &amp; developments affecting the AAPI community."},{"content":"<strong>CONDUCTING TRADE MISSIONS</strong>&nbsp;throughout Asia to develop business partnerships &amp; increase brand awareness."}]}',
                'created_at' => '2020-03-18 00:05:46',
                'updated_at' => '2020-03-18 01:24:14',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Membership',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"title":"AREAA’S MEMBERSHIP REPRESENTS A VAST ARRAY OF CULTURAL, ETHNIC, & PROFESSIONAL BACKGROUNDS.","content":"Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.","btn1_text":"View Our Partners","btn1_link":"http://52.24.144.212/areaa/our-partners","btn2_text":"Become a Member","btn2_link":"http://52.24.144.212/areaa/membership-registration"}]}',
                'created_at' => '2020-03-18 00:08:16',
                'updated_at' => '2020-03-24 04:42:08',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Who We Are',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Featured Video","type":"attachment","alias":"video"},{"name":"Video Cover Image","type":"attachment","alias":"cover_image"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"video":"67","cover_image":"46","title":"Who We Are","content":"<p><span style=\\"font-size:18px;\\">With over&nbsp;<strong><a href=\\"http://127.0.0.1/areaa/chapter-homepage#\\"><span style=\\"color:#ab1a2d;\\">17,000 members</span></a></strong>&nbsp;in<a href=\\"http://127.0.0.1/areaa/chapter-homepage#\\">&nbsp;<strong><span style=\\"color:#ab1a2d;\\">41 chapters</span></strong>&nbsp;</a>across the US and Canada, AREAA&nbsp;<strong>is the largest Asian American and Pacific Islander (AAPI) trade organization in North America.</strong></span></p>\\n\\n<p><span style=\\"font-size:18px;\\">As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</span></p>\\n","btn1_text":"Join Us","btn1_link":"#","btn2_text":"Contact us","btn2_link":"#"}]}',
                'created_at' => '2020-03-18 00:11:25',
                'updated_at' => '2020-03-19 03:59:02',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Member Benefits',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Alt Text","type":"text","alias":"alt_text"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"32","alt_text":"chapter title","title":"Member Benefits","content":"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.","btn1_text":"Join Us","btn1_link":"#","btn2_text":"Contact us","btn2_link":"#"}]}',
                'created_at' => '2020-03-18 00:13:28',
                'updated_at' => '2020-03-19 01:42:03',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Member Benefits List Items',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Content","type":"editor"}],"data":[{"content":"Lorem ipsum dolor sit amet&nbsp;<strong>CONSECTETUR</strong>&nbsp;adipisicing"},{"content":"Aipisicing elit,&nbsp;<strong>SED DO EIUSMOD TEMPOR</strong>&nbsp;incididunt ut labore et"},{"content":"<strong>EIUSMOD&nbsp;</strong>tempor incididunt ut labore et dolore magna aliqua"}]}',
                'created_at' => '2020-03-18 00:15:37',
                'updated_at' => '2020-03-18 01:41:39',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Sponsors',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button Text","type":"text","alias":"btn_text"},{"name":"Button Link","type":"text","alias":"btn_link"}],"data":[{"title":"Sponsors","content":"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.","btn_text":"Interested In Sponsorship?","btn_link":"#"}]}',
                'created_at' => '2020-03-18 00:17:00',
                'updated_at' => '2020-03-18 01:41:39',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Sponsors Filters',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Icon","type":"text"},{"name":"Text","type":"text"},{"name":"Link","type":"text"}],"data":[{"icon":"jade","text":"Jade","link":"#"},{"icon":"diamond","text":"Diamond","link":"#"},{"icon":"emerald","text":"Emerald","link":"#"},{"icon":"opal","text":"Opal","link":"#"},{"icon":"ruby","text":"Ruby","link":"#"},{"icon":"pearl","text":"Pearl","link":"#"}]}',
                'created_at' => '2020-03-18 00:20:55',
                'updated_at' => '2020-03-18 01:58:46',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Top Sponsor',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Badge Icon","type":"text","alias":"badge_icon"},{"name":"Image","type":"attachment"},{"name":"Alt Text","type":"text","alias":"alt_text"}],"data":[{"badge_icon":"jade","image":"33","alt_text":"chapter title"}]}',
                'created_at' => '2020-03-18 00:24:46',
                'updated_at' => '2020-03-18 02:09:38',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Other Sponsors',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Badge Image","type":"text","alias":"badge_icon"},{"name":"Image","type":"attachment"},{"name":"Alt Text","type":"text","alias":"alt_text"}],"data":[{"badge_icon":"ruby","image":"34","alt_text":"chapter title"},{"badge_icon":"emerald","image":"35","alt_text":"chapter title"},{"badge_icon":"diamond","image":"36","alt_text":"chapter title"},{"badge_icon":"opal","image":"37","alt_text":"chapter title"},{"badge_icon":"pearl","image":"38","alt_text":"chapter title"},{"badge_icon":"diamond","image":"39","alt_text":"chapter title"},{"badge_icon":"opal","image":"40","alt_text":"chapter title"},{"badge_icon":"pearl","image":"41","alt_text":"chapter title"},{"badge_icon":"diamond","image":"42","alt_text":"chapter title"},{"badge_icon":"opal","image":"43","alt_text":"chapter title"},{"badge_icon":"pearl","image":"44","alt_text":"chapter title"},{"badge_icon":"diamond","image":"45","alt_text":"chapter title"}]}',
                'created_at' => '2020-03-18 00:26:20',
                'updated_at' => '2020-03-18 02:10:54',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Contact Us',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Content","type":"editor"},{"name":"Location Icon","type":"text","alias":"loc_icon"},{"name":"Location Text","type":"text","alias":"loc_text"},{"name":"Telephone Icon","type":"text","alias":"tel_icon"},{"name":"Telephone Text","type":"text","alias":"tel_text"},{"name":"Telephone Link","type":"text","alias":"tel_link"},{"name":"Mail Icon","type":"text","alias":"mail_icon"},{"name":"Mail Text","type":"text","alias":"mail_text"},{"name":"Mail Link","type":"text","alias":"mail_link"}],"data":[{"content":"<h3>Have Questions?</h3>\\n\\n<h1>Contact Us</h1>\\n\\n<p>Lorem ipsum dolor sit amet, quam sollicitudin sagittis fringilla lacus enim, leo elit non nec varius sodales. Amet faucibus, id tempor quisque pharetra leo. Curae integer. Diam duis integer vel ut.</p>\\n","loc_icon":"loc","loc_text":"3990 Old Town Avenue C304, San Diego, CA 92110","tel_icon":"tel","tel_text":"619.795.7873 ","tel_link":"tel:619.795.7873","mail_icon":"mail","mail_text":"contact@areaa.org","mail_link":"mailto:contact@areaa.org"}]}',
                'created_at' => '2020-03-18 02:28:28',
                'updated_at' => '2020-03-18 02:35:09',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'FAQ Contact Details',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Icon","type":"text"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"}],"data":[{"icon":"location","title":"AREAA National","content":"3990 Old Town Avenue C304, San Diego, CA 92110"},{"icon":"phone","title":"Support Phone #","content":"Contact: 795-7873"},{"icon":"email","title":"Support Email","content":"Email: contact@areaa.org"}]}',
                'created_at' => '2020-03-19 04:24:10',
                'updated_at' => '2020-03-19 04:37:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}