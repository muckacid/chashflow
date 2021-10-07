<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'balance']);
        $role3 = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'user'])->assignRole($role1);
        Permission::create(['name' => 'user.profile.show'])->assignRole($role1);
        Permission::create(['name' => 'user.profile.edit.password'])->assignRole($role1);
        Permission::create(['name' => 'user.profile.edit.email'])->assignRole($role1);

        Permission::create(['name' => 'balance.show'])->assignRole($role2);
        Permission::create(['name' => 'balance.add'])->assignRole($role2);
        Permission::create(['name' => 'balance.edit'])->assignRole($role2);
        
        Permission::create(['name' => 'admin.users'])->assignRole($role3);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role3);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role3);
        Permission::create(['name' => 'admin.users.delete'])->assignRole($role3);

        Permission::create(['name' => 'lte.admin'])->assignRole($role3);
        
        /* para ejecutar un cambio ingresar comando */
        //php artisan migrate:fresh --seed
    }
}
