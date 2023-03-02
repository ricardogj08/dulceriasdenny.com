<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seeder que inicializa la tabla de roles de los usuarios.
     */
    public function run()
    {
        $roleModel = model('RoleModel');

        $roleModel->ignore(true)->InsertBatch([
            [
                'name'        => 'admin',
                'description' => 'Administrador',
            ],
            [
                'name'        => 'editor',
                'description' => 'Editor',
            ],
            [
                'name'        => 'analyst',
                'description' => 'Analista',
            ],
        ]);
    }
}
