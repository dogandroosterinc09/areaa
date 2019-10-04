<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = [
            [
                'name' => 'Create Role',
                'permission_group_id' => 1,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Role',
                'permission_group_id' => 1,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Role',
                'permission_group_id' => 1,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Role',
                'permission_group_id' => 1,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create Permission',
                'permission_group_id' => 2,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Permission',
                'permission_group_id' => 2,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Permission',
                'permission_group_id' => 2,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Permission',
                'permission_group_id' => 2,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create Permission Group',
                'permission_group_id' => 3,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Permission Group',
                'permission_group_id' => 3,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Permission Group',
                'permission_group_id' => 3,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Permission Group',
                'permission_group_id' => 3,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create User',
                'permission_group_id' => 4,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read User',
                'permission_group_id' => 4,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update User',
                'permission_group_id' => 4,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete User',
                'permission_group_id' => 4,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create System Setting',
                'permission_group_id' => 5,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read System Setting',
                'permission_group_id' => 5,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update System Setting',
                'permission_group_id' => 5,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete System Setting',
                'permission_group_id' => 5,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create Page',
                'permission_group_id' => 6,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Page',
                'permission_group_id' => 6,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Page',
                'permission_group_id' => 6,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Page',
                'permission_group_id' => 6,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create Post',
                'permission_group_id' => 7,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Post',
                'permission_group_id' => 7,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Post',
                'permission_group_id' => 7,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Post',
                'permission_group_id' => 7,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create Home Slide',
                'permission_group_id' => 8,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Home Slide',
                'permission_group_id' =>87,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Home Slide',
                'permission_group_id' => 8,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Home Slide',
                'permission_group_id' => 8,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Create Contact',
                'permission_group_id' => 9,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Read Contact',
                'permission_group_id' =>89,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Update Contact',
                'permission_group_id' => 9,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Delete Contact',
                'permission_group_id' => 9,
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($permissions as $permission) {
            $new_permission = DB::table('permissions')->insert($permission);
        }
    }
}
