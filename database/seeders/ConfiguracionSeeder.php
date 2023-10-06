<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("set foreign_key_checks=0");
            DB::table('model_has_permissions')->truncate();
            DB::table('model_has_roles')->truncate();
            DB::table('role_has_permissions')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("set foreign_key_checks=1");

        //Roles del Sistema
        $admin = Role::create(['name' => 'Administrador']); //Administrador del Sistema 

        //permisos
        Permission::create(['name' => 'admin.roles.index'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.destroy'])->syncRoles([$admin]);


        $useradmin= User::where('email','kayserenrique@gmail.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        //usuario
        User::create([
            'name' => 'Oliver Gomez',
            'email' => 'kayserenrique@gmail.com',
            'password' => bcrypt('123456789'),
        ])->assignRole('Administrador');
    }
}
