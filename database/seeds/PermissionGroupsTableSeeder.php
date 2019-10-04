<?php

use Illuminate\Database\Seeder;

class PermissionGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_groups')->delete();

        $permission_groups = [
            [
                'name' => 'Roles',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Permissions',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Permission Groups',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Users',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'System Settings',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pages',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Posts',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Home Slides',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Contacts',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($permission_groups as $permission_group) {
            $new_permission_group = DB::table('permission_groups')->insert($permission_group);
        }
    }
}
