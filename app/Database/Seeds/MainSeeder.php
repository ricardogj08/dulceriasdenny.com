<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa tablas de la base de datos.
 */
class MainSeeder extends Seeder
{
    public function run()
    {
        $this->call('SettingSeeder');
    }
}
