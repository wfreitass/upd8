<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Auth;
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

        $roles = ["cliente", "recepcionista"];

        $permissionsUserClient = [
            #permissions normal animals
            "view animal",
            "create animal",
            "delete animal",
            "edit animal",
            #permissoens normal consultation
            "view consultation",
            "create consultation",
            "delete consultation",
        ];

        $permissionsRecepcionista = [
            "view all animal",
            "view all consultation",
        ];

        foreach ($roles as $key => $role) {
            Role::create(["name" => $role]);
        }

        foreach ($permissionsUserClient as $key => $permission) {
            $permission = Permission::create(['name' => $permission]);
            Role::findByName("cliente")->givePermissionTo($permission);
        }

        foreach ($permissionsRecepcionista as $key => $permission) {
            $permission = Permission::create(['name' => $permission]);
            Role::findByName("recepcionista")->givePermissionTo($permission);
        }

        $user = User::find(1);
        $user->assignRole('cliente');
        $user->assignRole('recepcionista');
    }
}
