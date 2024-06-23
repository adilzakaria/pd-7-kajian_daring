<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'home']);
        Permission::create(['name'=>'study']);
        Permission::create(['name'=>'content']);
        Permission::create(['name'=>'contact']);
        Permission::create(['name'=>'profile']);

        Permission::create(['name'=>'dash']);
        Permission::create(['name'=>'form']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('home');
        $roleAdmin->givePermissionTo('study');
        $roleAdmin->givePermissionTo('content');
        $roleAdmin->givePermissionTo('contact');
        $roleAdmin->givePermissionTo('dash');
        $roleAdmin->givePermissionTo('form');

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('home');
        $roleUser->givePermissionTo('study');
        $roleUser->givePermissionTo('content');
        $roleUser->givePermissionTo('contact');
        $roleUser->givePermissionTo('profile');
    }
}
