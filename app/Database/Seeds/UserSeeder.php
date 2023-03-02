<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Seeder que inicializa la tabla de usuarios de acceso.
 */
class UserSeeder extends Seeder
{
    public function run()
    {
        $roleModel = model('RoleModel');

        $role = $roleModel
            ->select('id')
            ->where('name', 'admin')
            ->first();

        $userModel = model('UserModel');

        $userModel->ignore(true)->insert([
            'name'     => 'Genotipo',
            'email'    => 'hola@genotipo.com',
            'role_id'  => $role['id'],
            'active'   => true,
            'password' => '$2y$10$LSiU3x65HS5I2Q3JR4uooumvXszWBAHThU9M7I0.bua9TPZ8m0/IG',
        ]);
    }
}
