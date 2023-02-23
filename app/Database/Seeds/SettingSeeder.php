<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de settings.
 */
class SettingSeeder extends Seeder
{
    public function run()
    {
        helper('setting');

        setting()->get('App.general', 'favicon') ?? setting()->set('App.general', 'favicon.svg', 'favicon');
        setting()->get('App.general', 'theme') ?? setting()->set('App.general', 'pastel', 'theme');
    }
}
