<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTicketSeeder extends Seeder
{
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'edit ticket']);
        Permission::create(['name' => 'delete ticket']);
        Permission::create(['name' => 'publish ticket']);
        Permission::create(['name' => 'unpublish ticket']);
        $role1 = Role::create(['name' => 'owner']);
        $role1->givePermissionTo('edit ticket');
        $role1->givePermissionTo('delete ticket');
        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('publish ticket');
        $role2->givePermissionTo('unpublish ticket');
        $role3 = Role::create(['name' => 'super-admin']);
        $user = \App\Models\User::factory()->create([
        'name' => 'test',
        'email' => 'test@example.com',
        'password' => bcrypt(123),
    ]);
        $user->assignRole($role1);
        $user = \App\Models\User::factory()->create([
        'name' => 'admin',
        'email' => 'admin@example.com',
        'password' => bcrypt(123),
    ]);
        $user->assignRole($role2);
        $user = \App\Models\User::factory()->create([
        'name' => 'superadmin',
        'email' => 'superadmin@example.com',
        'password' => bcrypt(123),
    ]);
        $user->assignRole($role3);
    }
}
