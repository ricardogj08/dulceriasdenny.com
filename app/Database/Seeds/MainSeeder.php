<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Seeder principal que inicializa tablas de la base de datos.
 */
class MainSeeder extends Seeder
{
    public function run()
    {
        $this->call('SettingSeeder');
        $this->call('SocialNetworkSeeder');
        $this->call('RoleSeeder');
        $this->call('UserSeeder');
    }
}
