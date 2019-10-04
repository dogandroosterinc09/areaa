<?php

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\SeoMeta;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        $pages = [
            [
                "name" => "Home",
                "slug" => "home",
                "page_type_id" => "1",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Home",
                "meta_keywords" => "Home",
                "meta_description" => "Home",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],[
                "name" => "About Us",
                "slug" => "about-us",
                "page_type_id" => "2",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "About Us",
                "meta_keywords" => "About Us",
                "meta_description" => "About Us",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Contact Us",
                "slug" => "contact-us",
                "page_type_id" => "3",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Contact Us",
                "meta_keywords" => "Contact Us",
                "meta_description" => "Contact Us",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Page Not Found",
                "slug" => "404",
                "page_type_id" => "2",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Page Not Found",
                "meta_keywords" => "Page Not Found",
                "meta_description" => "Page Not Found",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Login",
                "slug" => "customer/login",
                "page_type_id" => "2",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Login",
                "meta_keywords" => "Login",
                "meta_description" => "Login",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Register",
                "slug" => "customer/register",
                "page_type_id" => "2",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Register",
                "meta_keywords" => "Register",
                "meta_description" => "Register",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Forgot Password",
                "slug" => "customer/password/email",
                "page_type_id" => "2",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Forgot Password",
                "meta_keywords" => "Forgot Password",
                "meta_description" => "Forgot Password",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Reset Password",
                "slug" => "customer/password/reset",
                "page_type_id" => "2",
                "banner_description" => "",
                "content" => "",
                "meta_title" => "Reset Password",
                "meta_keywords" => "Reset Password",
                "meta_description" => "Reset Password",
                "is_active" => "1",
                "seo_meta_id" => "0",
                "created_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at" => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($pages as $page) {
            $page_data = [
                "name" => $page["name"],
                "slug" => $page["slug"],
                "banner_description" => $page["banner_description"],
                "content" => $page["content"],
                "is_active" => $page["is_active"],
                "seo_meta_id" => $page["seo_meta_id"],
                "page_type_id" => $page['page_type_id'],
                "created_at" => $page["created_at"],
                "updated_at" => $page["updated_at"],
            ];

            /* seo meta */
            $page['seo_meta_id'] = isset($page['seo_meta_id']) ? $page['seo_meta_id'] : 0;
            $seo_inputs = [
                'meta_title' => $page['meta_title'],
                'meta_keywords' => $page['meta_keywords'],
                'meta_description' => $page['meta_description'],
            ];
            $seo_meta = SeoMeta::updateOrCreate(['id' => $page['seo_meta_id']], $seo_inputs);
            $page_data['seo_meta_id'] = $seo_meta->id;
            /* seo meta */

            $new_page_id = DB::table('pages')->insertGetId($page_data);
            $new_page = Page::find($new_page_id);
        }
    }
}