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
        $roles1=Role::create(['name'=>'Administradores']);
        $roles2=Role::create(['name'=>'Blogger']);

        //Permiso para el Dashboard
        Permission::create(['name'=>'admin.home'])->syncRoles([$roles1,$roles2]);

         //Permiso para el Usuarios
         Permission::create(['name'=>'admin.users.index'])->syncRoles([$roles1]);
         Permission::create(['name'=>'admin.users.edit'])->syncRoles([$roles1]);
         Permission::create(['name'=>'admin.users.update'])->syncRoles([$roles1]);

        //Permiso para el Categories
        Permission::create(['name'=>'admin.categories.index'])->syncRoles([$roles1,$roles2]);
        Permission::create(['name'=>'admin.categories.create'])->syncRoles([$roles1]);
        Permission::create(['name'=>'admin.categories.edit'])->syncRoles([$roles1]);
        Permission::create(['name'=>'admin.categories.destroy'])->syncRoles([$roles1]);


        //Permiso para el Tags
        Permission::create(['name'=>'admin.tags.index'])->syncRoles([$roles1,$roles2]);
        Permission::create(['name'=>'admin.tags.create'])->syncRoles([$roles1]);
        Permission::create(['name'=>'admin.tags.edit'])->syncRoles([$roles1]);
        Permission::create(['name'=>'admin.tags.destroy'])->syncRoles([$roles1]);


        //Permiso para el Posts
        Permission::create(['name'=>'admin.posts.index'])->syncRoles([$roles1,$roles2]);
        Permission::create(['name'=>'admin.posts.create'])->syncRoles([$roles1,$roles2]);
        Permission::create(['name'=>'admin.posts.edit'])->syncRoles([$roles1,$roles2]);
        Permission::create(['name'=>'admin.posts.destroy'])->syncRoles([$roles1,$roles2]);


        
    }
}
