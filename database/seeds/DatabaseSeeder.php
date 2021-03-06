<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionGroupsTableSeeder::class);
        $this->call(UserHasRolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(SystemSettingsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PageTypesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
//        $this->call(CitiesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(ContactsTableSeeder::class);
        $this->call(HomeSlidesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(SeoMetasTableSeeder::class);
        $this->call(UserHasPermissionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(AttachablesTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        $this->call(BoardMembersTableSeeder::class);
        $this->call(ChaptersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(PageSectionTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(BenefitsTableSeeder::class);        
        $this->call(WebinarsTableSeeder::class);
        $this->call(ChapterHomesTableSeeder::class);
        $this->call(ChapterEventsTableSeeder::class);
        $this->call(ChapterBoardMembersTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MediaCategoriesTableSeeder::class);
        $this->call(ChapterLogosTableSeeder::class);
        $this->call(ChapterPageAboutUsTableSeeder::class);
        $this->call(ChapterPageEventsTableSeeder::class);
        $this->call(ChapterPageContactUsTableSeeder::class);
        $this->call(ChapterPageLeadershipsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(ChapterPageHomeslidersTableSeeder::class);
        $this->call(ChapterContactsTableSeeder::class);
        $this->call(EventRegistrationsTableSeeder::class);
        $this->call(BenefitsCategoriesTableSeeder::class);
    }
}
