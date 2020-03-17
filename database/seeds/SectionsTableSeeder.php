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
                'name' => 'Our Mission',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button Text","type":"text","alias":"btn_text"},{"name":"Button Link","type":"text","alias":"btn_url"}],"data":[{"image":"1","title":"Our Mission","content":"AREAA is dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.","btn_text":"Join AaREAA!","btn_url":"#"}]}',
                'created_at' => '2020-03-13 19:31:20',
                'updated_at' => '2020-03-13 19:34:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Our Story',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"}],"data":[{"image":"2","title":"Our Story","content":"Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market."}]}',
                'created_at' => '2020-03-13 19:38:40',
                'updated_at' => '2020-03-13 20:01:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Goals List',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Content","type":"editor"}],"data":[{"content":"<strong>CREATING A POWERFUL NATIONAL VOICE&nbsp;</strong>for housing &amp; real estate professionals that serve this dynamic market."},{"content":"<strong>ADVOCATING FOR POLICY POSITIONS&nbsp;</strong>at the national level that will reduce barriers to homeownership for the AAPI community."},{"content":"<strong>INCREASING BUSINESS OPPORTUNITIES&nbsp;</strong>for mortgage &amp; real estate professionals that serve this growing community."},{"content":"<strong>HOSTING NATIONAL AND LOCAL EVENTS&nbsp;</strong>to educate &amp; inform members about housing issues &amp; developments affecting the AAPI community."},{"content":"<strong>CONDUCTING TRADE MISSIONS</strong>&nbsp;throughout Asia to develop business partnerships &amp; increase brand awareness."}]}',
                'created_at' => '2020-03-13 19:41:13',
                'updated_at' => '2020-03-13 20:06:03',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Membership',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"title":"AREAA’S MEMBERSHIP REPRESENTS A VAST ARRAY OF CULTURAL, ETHNIC, & PROFESSIONAL BACKGROUNDS.","content":"Founded in 2003, the Asian Real Estate Association of America (AREAA) is a nonprofit professional trade organization dedicated to promoting sustainable homeownership opportunities in Asian American communities by creating a powerful national voice for housing and real estate professionals that serve this dynamic market.","btn1_text":"View Our Partners","btn1_link":"#","btn2_text":"Become a Member","btn2_link":"#"}]}',
                'created_at' => '2020-03-13 20:10:54',
                'updated_at' => '2020-03-13 20:12:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3,
                'name' => 'Goals',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"}],"data":[{"title":"AREAA Will Accomplish These Goals By:"}]}',
                'created_at' => '2020-03-13 22:41:30',
                'updated_at' => '2020-03-13 22:43:47',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Who We Are',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Feature Video","type":"attachment","alias":"video"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"video":"0","title":"Who We Are","content":"<p>With over&nbsp;<a href=\\"http://127.0.0.1/areaa/chapter-homepage#\\">17,000 members</a>&nbsp;in<a href=\\"http://127.0.0.1/areaa/chapter-homepage#\\">&nbsp;41 chapters&nbsp;</a>across the US and Canada, AREAA&nbsp;<strong>is the largest Asian American and Pacific Islander (AAPI) trade organization in North America.</strong></p>\\n\\n<p>As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</p>\\n","btn1_text":"Join Us","btn1_link":"#","btn2_text":"Contact Us","btn2_link":"#"}]}',
                'created_at' => '2020-03-13 22:57:38',
                'updated_at' => '2020-03-13 23:25:35',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Member Benefits',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"3","title":"Member Benefits","content":"","btn1_text":"Join Us","btn1_link":"#","btn2_text":"Contact Us","btn2_link":"#"}]}',
                'created_at' => '2020-03-13 23:13:52',
                'updated_at' => '2020-03-13 23:38:35',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Become a Member',
                'type' => 3,
            'value' => '{"options":{"create":false},"fields":[{"name":"Feature Image","type":"attachment","alias":"image"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"6","title":"Become a Member","content":"<p>With over&nbsp;<b>17,000 members</b>&nbsp;in&nbsp;<b>41 chapters</b>&nbsp;across the US and Canada, AREAA is&nbsp;<b>the largest Asian American and Pacific Islander (AAPI) trade organization in North America</b>.</p>\\n\\n<p>As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</p>\\n","btn1_text":"Learn More","btn1_link":"#","btn2_text":"Become a Member","btn2_link":"#"}]}',
                'created_at' => '2020-03-13 23:47:22',
                'updated_at' => '2020-03-16 17:10:36',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Partnership',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Feature Image","type":"attachment","alias":"image"},{"name":"Title","type":"text"},{"name":"Content","type":"editor"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"7","title":"Partnership","content":"We have more than 30 partners from<br />\\n<b>Local</b>&nbsp;to&nbsp;<b>International</b>.","btn1_text":"Learn More","btn1_link":"#","btn2_text":"Become a Member","btn2_link":"#"}]}',
                'created_at' => '2020-03-13 23:54:40',
                'updated_at' => '2020-03-16 17:10:36',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Partnership Levels',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Icon","type":"attachment"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"}],"data":[{"icon":"0","title":"JADE LEVEL","content":""},{"icon":"0","title":"DIAMOND LEVEL","content":""},{"icon":"0","title":"EMERALD LEVEL","content":""}]}',
                'created_at' => '2020-03-13 23:59:17',
                'updated_at' => '2020-03-16 17:10:36',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Growing Opportunities',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Featured Image","type":"attachment","alias":"image"},{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button1 Text","type":"text","alias":"btn1_text"},{"name":"Button1 Link","type":"text","alias":"btn1_link"},{"name":"Button2 Text","type":"text","alias":"btn2_text"},{"name":"Button2 Link","type":"text","alias":"btn2_link"}],"data":[{"image":"8","title":"Growing Opportunities","content":"","btn1_text":"Learn More","btn1_link":"#","btn2_text":"Become a Member","btn2_link":"#"}]}',
                'created_at' => '2020-03-16 16:45:53',
                'updated_at' => '2020-03-16 17:10:36',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Growing Opportunities List',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Content","type":"editor"}],"data":[{"content":"<p>Asian American population is&nbsp;<b>22.5 million</b></p>\\n"},{"content":"<p><b>72% population growth</b>&nbsp;from 2000 to 2015</p>\\n"},{"content":"<p>By&nbsp;<b>2060</b>, there is going to be&nbsp;<b>100% increase</b>&nbsp;in this number</p>\\n"},{"content":"<p><b>Chinese, Indian</b>&nbsp;and&nbsp;<b>Filipino</b>&nbsp;for&nbsp;<b>57%</b>&nbsp;of the Asian Americans</p>\\n"},{"content":"<p><b>The buying power</b>&nbsp;of this group is said to&nbsp;<b>exceed $1 trillion</b>&nbsp;with a&nbsp;<b>33% increase by 2022</b></p>\\n"}]}',
                'created_at' => '2020-03-16 16:49:42',
                'updated_at' => '2020-03-16 22:26:32',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'Featured Sponsors',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"}],"data":[{"title":"Sponsors"}]}',
                'created_at' => '2020-03-16 17:29:10',
                'updated_at' => '2020-03-16 17:34:30',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'Featured Sponsors Images',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Image","type":"attachment"}],"data":[{"image":"9"},{"image":"10"},{"image":"11"},{"image":"12"},{"image":"13"},{"image":"0"},{"image":"0"}]}',
                'created_at' => '2020-03-16 17:30:28',
                'updated_at' => '2020-03-16 17:34:30',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'Sponsors',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name":"Title","type":"text"},{"name":"Content","type":"textarea"},{"name":"Button Text","type":"text","alias":"btn_text"},{"name":"Button Link","type":"text","alias":"btn_link"}],"data":[{"title":"Sponsors","content":"","btn_text":"Interested In Sponsorship?","btn_link":"#"}]}',
                'created_at' => '2020-03-16 17:58:20',
                'updated_at' => '2020-03-16 17:59:03',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'Member Benefits List',
                'type' => 3,
                'value' => '{"options":{"create":false},"fields":[{"name": "Content", "type": "editor" } ], "data": [ { "content": "" }, { "content": "" }, { "content": "" } ] }',
                'created_at' => '2020-03-16 18:13:33',
                'updated_at' => '2020-03-16 18:13:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}