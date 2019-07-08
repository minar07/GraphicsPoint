<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'gig-list',
           'gig-create',
           'gig-edit',
           'gig-delete',
           'slider-list',
           'slider-create',
           'slider-edit',
           'slider-delete',
           'link-list',
           'link-create',
           'link-edit',
           'link-delete'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}