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
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 00:08:57',
                'updated_at' => '2020-05-30 00:23:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'EC Purchasing',
                'category_id' => 1,
                'thumbnail' => 'public/uploads/benefits/tab-travel2-1590826947.jpg',
                'short_description' => 'Exclusive discounts on car rentals',
                'content' => '',
                'external_link' => 'https://ecpurchasing.com/',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:22:27',
                'updated_at' => '2020-05-30 01:51:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ZipReports',
                'category_id' => 2,
                'thumbnail' => 'public/uploads/benefits/tab-logo1-1590827048.jpg',
                'short_description' => 'Free Credit Report, Tenant Screening Service, Online Rent Collection',
                'content' => '<p>ZipReports specializes in helping organizations of all sizes by providing them with complete and in-depth background screening services. In fact, many of the most progressive and successful companies in the nation rely on ZipReports to deliver valuable real-time solutions that result in increased efficiency and faster turnaround. We have integrated&nbsp;decision making&nbsp;tools all within a customized system that meets your specific needs and fulfills your industry standards. ZipReports will provide you with the most accurate and current information available by utilizing our streamlined Instant Web Tools. ScreenPro, our&nbsp;on demand&nbsp;tenant screening service, will help you make sound and accurate business decisions that minimize your risk of having an unsafe tenant or unwanted employee. Our unique leasing program, WebLease, will afford you productivity-enhancing results that can help eliminate paperwork and give you a competitive advantage. With AuditPro, we will automatically monitor and run a background check on your current tenant or employee to ensure that they maintain and consistently meet your screening standards. ZipReports prides itself in customer satisfaction. Our dedicated customer service team will manage all your technical and ongoing service requirements. With ZipReports, you minimize your risk while optimizing results.</p>

<p>&nbsp;</p>

<h3>Benefits of Using ZipReports:</h3>

<ul>
<li>Superior customized reports tailored to your needs</li>
<li>Real-time access with instant and accurate results</li>
<li>Comprehensive national and international reports</li>
<li>Web-Based Verification Tools</li>
<li>Dedicated&nbsp;and experienced customer service team</li>
<li>Data security and system reliability</li>
<li>Competitive pricing Data accuracy</li>
</ul>

<p><a href="https://zipreports.com/zipapp.php" rel="noopener noreferrer" target="_blank">Find out More</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:24:08',
                'updated_at' => '2020-05-30 01:24:08',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'SafeTeam Home Security',
                'category_id' => 2,
                'thumbnail' => 'public/uploads/benefits/tab-logo2-1590827159.jpg',
                'short_description' => '$100 referral cash rewards program for individuals and chapters',
                'content' => '<p><a href="https://www.safehometeam.com/copy-of-areaa-resources" target="_blank" rel="noopener noreferrer">Click HERE</a></p>',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:25:59',
                'updated_at' => '2020-05-30 01:25:59',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Enfortra',
                'category_id' => 2,
                'thumbnail' => 'public/uploads/benefits/tab-logo3-1590827202.jpg',
                'short_description' => 'Identity Theft Protection/ Monitoring Platform',
                'content' => '',
                'external_link' => 'https://www.areaa.enfortra.com/',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:26:42',
                'updated_at' => '2020-05-30 01:52:14',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Foreclosure.com',
                'category_id' => 2,
                'thumbnail' => 'public/uploads/benefits/tab-logo4-1590827247.jpg',
                'short_description' => 'Identity Theft Protection/ Monitoring Platform',
                'content' => '',
                'external_link' => 'https://www.foreclosure.com/special.html?px=Um1WTktMUDlCd3M&rsp=3026',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:27:27',
                'updated_at' => '2020-05-30 01:53:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Office Depot',
                'category_id' => 3,
                'thumbnail' => 'public/uploads/benefits/tab-office1-1590827316.jpg',
                'short_description' => 'Exclusive and preferred pricing. Savings include $20 to %55 off and free next day shipping.

',
                'content' => '',
                'external_link' => 'https://community.officedepot.com/GPOHome?id=02077015',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:28:36',
                'updated_at' => '2020-05-30 01:53:36',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'EC Purchasing',
                'category_id' => 3,
                'thumbnail' => 'public/uploads/benefits/tab-office2-1590827427.jpg',
                'short_description' => 'Staples and Office Depot',
                'content' => '',
                'external_link' => 'https://ecpurchasing.com/',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:30:27',
                'updated_at' => '2020-05-30 01:53:51',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'FedEx Office',
                'category_id' => 3,
                'thumbnail' => 'public/uploads/benefits/tab-office3-1590827545.jpg',
                'short_description' => 'Print virtually anywhere with exclusive discounts',
                'content' => '',
                'external_link' => 'https://www.fedex.com/en-us/printing/online-printing.html',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:32:25',
                'updated_at' => '2020-05-30 01:54:08',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'HelloAlex',
                'category_id' => 4,
                'thumbnail' => 'public/uploads/benefits/tab-transaction1-1590827640.jpg',
                'short_description' => 'AI Assistant to help qualify and nurture leads',
                'content' => '<p>HelloAlex helps AREAA members earn more commissions by helping agents stay engaged with their clients on multiple channels 24/7 utilizing innovative technology like Artificial Intelligence.</p>

<p><a href="https://helloalex.io/areaa/" rel="noopener noreferrer" target="_blank">Click HERE</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:34:00',
                'updated_at' => '2020-05-30 01:34:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Perfect LO',
                'category_id' => 4,
                'thumbnail' => 'public/uploads/benefits/tab-transaction2-1590827684.jpg',
                'short_description' => 'Cloud-based mortgage software to help obtain a borrower’s complete profile',
            'content' => '<p>PerfectLO is a cloud-based mortgage&nbsp;software that solves one of the biggest problems during the loan application process: failure to provide the detailed information to complete a Borrower’s true profile.&nbsp;This non-intimidating interactive questionnaire assumes nothing and fact finds every detail known to loan kind.&nbsp; It provides a detailed document checklist to the borrower based on their answers, imports into your current LOS system, and&nbsp;provides an easy to read document summary for the LO and team to see all the borrower’s answers.&nbsp; Also, our software works in every language, it reads the borrowers preferred language that they are browsing in (Google Chrome settings).</p>

<p><a href="http://promlo.com/AREAALoanAp">Click here</a>&nbsp;to access your discounted rate! Use the code AREAA2018.</p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:34:44',
                'updated_at' => '2020-05-30 01:34:44',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Radius',
                'category_id' => 4,
                'thumbnail' => 'public/uploads/benefits/tab-transaction3-1590827720.jpg',
                'short_description' => 'Effective, low cost, mobile optimized CRM tool',
                'content' => '',
                'external_link' => 'https://www.radiusagent.com/association/areaa/start',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:35:20',
                'updated_at' => '2020-05-30 01:54:22',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'TRT Banners',
                'category_id' => 5,
                'thumbnail' => 'public/uploads/benefits/tab-marketing1-1590827751.jpg',
                'short_description' => '10% off on all purchases including retractable banner stands

',
                'content' => '',
                'external_link' => 'https://old.trtbanners.com/customers/areaa',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:35:51',
                'updated_at' => '2020-05-30 01:54:31',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'RISMedia',
                'category_id' => 5,
                'thumbnail' => 'public/uploads/benefits/tab-marketing2-1590827785.jpg',
                'short_description' => 'FREE Pop-a-note conversational and social media marketing system

',
                'content' => '<p>We are pleased to announce that through our partnership with AREAA, RISMedia is able to bring you a Pop-a-Note account at NO COST to you! Pop-a-Note is the industry’s leading conversational email and social media marketing system that enables you to automatically keep in touch with your contacts with short, timely, fun and interesting email notes that help create more interaction and conversations with your clients through this engaging and response-driving marketing system.</p>

<p>UN:&nbsp;areaa</p>

<p>PW:&nbsp;areaa</p>

<p><a href="http://www.popanote.com/users/login/areaa" rel="noopener noreferrer" target="_blank">Login&nbsp;Here</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:36:25',
                'updated_at' => '2020-05-30 01:36:25',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'EnfortProxiora',
                'category_id' => 5,
                'thumbnail' => 'public/uploads/benefits/tab-marketing3-1590827813.jpg',
                'short_description' => 'Translate listings into 19 languages & market your properties globally

',
                'content' => '<p>AREAA is now offering standard access to Proxio, for all active AREAA members. Proxio allows you to translate listings into 19 languages, market your properties globally, and network with over 400,000 real estate professionals from over 100 countries.</p>

<p>Click&nbsp;<a href="https://www.proxiopro.com/LoginPage.aspx" rel="noopener noreferrer" target="_blank">HERE</a>&nbsp;for more information</p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:36:53',
                'updated_at' => '2020-05-30 01:36:53',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Golden Tickets',
                'category_id' => 6,
                'thumbnail' => 'public/uploads/benefits/tab-gift1-1590827845.jpg',
                'short_description' => '7% Discount off sporting events and concerts

',
            'content' => '<p>AREAA members, get a 7% discount on tickets purchased through Golden Tickets. Golden Tickets specializes in all major events such as the Super Bowl, Olympics, Masters, World Cup, U.S. Open, Grand Prix, Final Four&nbsp;and&nbsp;even Concerts and Broadway Shows (worldwide). With over 25 years of service and an outstanding record from the Better Business Bureau; Golden Tickets is excited to be AREAA’s members “Passport To Sports”. Your tickets are delivered with a 200%&nbsp;guarantee;&nbsp;so take advantage of this savings and get 7% off your purchase as an AREAA member!</p>

<p>Purchase Tickets&nbsp;<a href="https://areaa.goldentickets.com/" rel="noopener noreferrer" target="_blank">HERE</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:37:25',
                'updated_at' => '2020-05-30 01:37:25',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'WineO Club',
                'category_id' => 6,
                'thumbnail' => 'public/uploads/benefits/tab-gift2-1590827871.jpg',
                'short_description' => '30 to 40% off retail value on premium wines

',
                'content' => '<p>WineO Club provides AREAA members a great way to strengthen and build relationships with your current and future clients. We offer wine gift packages delivered straight to clients’ door.</p>

<p>&nbsp;<strong>AREAA members receive&nbsp;15% to 25% off retail value of WineO gift&nbsp;packages and&nbsp;up to 50% off WineO events.</strong></p>

<p>&nbsp;What your client’s receive:</p>

<ul>
<li>Amazing wines from premium Napa to boutique California wineries</li>
<li>WineO tote bag(s)</li>
<li>Wine glass pen writer</li>
<li>WineO tasting notes</li>
<li>Your own personalized note</li>
</ul>

<p><a href="https://wineo101.com/pages/areaa" rel="noopener noreferrer" target="_blank">Purchase Here</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:37:51',
                'updated_at' => '2020-05-30 01:37:51',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '1800Flowers.com',
                'category_id' => 6,
                'thumbnail' => 'public/uploads/benefits/tab-gift3-1590827895.jpg',
                'short_description' => '20% off on floral arrangements and gourmet gift baskets

',
                'content' => '<p>At 1-800-FLOWERS.COM®, delivering smiles has been an art and a passion that began when Jim McCann opened his first flower shop in 1976. It’s not just in our business plan; it’s actually how we see the world.</p>

<p>Hit the Click to Purchase button below, and you’ll have access to ALL of our great sites listed above. Come back as often as you want, and Save 20% on every purchase every time, with your discount automatically deducted.</p>

<p>We offer truly original arrangements, gourmet gift baskets, beautiful plants, delicious sweet treats, more special gifts for every celebration and occasion. You can depend on 1-800-FLOWERS.COM® to arrange a smile for you and save 20%!!</p>

<p>Click on the Purchase button below, or call 888-755-7474 to receive your 20% discount by internet or by phone.</p>

<p>Reference account number 187624207</p>

<p><a href="http://www.1800flowers.com/areaa-10105" rel="noopener noreferrer" target="_blank">Click to Purchase</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:38:15',
                'updated_at' => '2020-05-30 01:38:15',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'La Belle Vie',
                'category_id' => 6,
                'thumbnail' => 'public/uploads/benefits/tab-gift4-1590827919.jpg',
                'short_description' => '$50 Off luxury rose arrangements

',
                'content' => '<p>La Belle Vie is a luxury gifting brand that suits any occasion; &nbsp;Birthdays, Anniversaries, Corporate Conferences, Weddings, Holidays, or just because it’s Wednesday,&nbsp;and so much more.&nbsp;For our team, creating the gift boxes is an intimate process and only the highest quality roses are chosen. The team thinks of the individuals who will receive this gift and how it will be used even after the initial gifting phase.&nbsp;The box can be used as a keepsake beyond the lifespan of the roses. AREAA members receive a 15% discount on all items listed on the site with the code&nbsp;<strong>AREAA</strong>.</p>

<p>View products&nbsp;<a href="http://www.labellevie-xo.com/" rel="noopener noreferrer" target="_blank">HERE</a></p>
',
                'external_link' => '',
                'slug' => '',
                'is_active' => 1,
                'created_at' => '2020-05-30 01:38:39',
                'updated_at' => '2020-05-30 01:38:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}