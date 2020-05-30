<?php

use Illuminate\Database\Seeder;

class BenefitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('benefits')->delete();
        
        \DB::table('benefits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Travelers',
                'category_id' => 1,
                'thumbnail' => 'public/uploads/benefits/tab-travel1-1590823422.jpg',
                'short_description' => 'Save an average of $550 on auto insurance annually',
                'content' => '<p>As a member of AREAA, you could save an average of $550* on auto insurance.</p>

<p>This Travelers program offers low rates and money-saving discounts such&nbsp;as:&nbsp;AREAA Member Discount Good Driver Discount Good Student Discount Hybrid/Electric Vehicle Discount Multi-Policy Discount</p>

<p><a href="https://www.travelers.com/go/pi/aff/AREAA_Web_LP.html?MMT=EM&amp;PRD=0M8493&amp;tfn=8008425936&amp;sponsor=AREAA&amp;pbl=Google&amp;plc=200426560&amp;adid=400393390&amp;cid=90272447&amp;cmpgid=11053623&amp;dclid=CJHs__neytQCFVGSfgodavwHag" rel="noopener noreferrer" target="_blank">Click Here</a>&nbsp;to learn more</p>
',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 00:08:57',
                'updated_at' => '2020-05-30 00:23:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}