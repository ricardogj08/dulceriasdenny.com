<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Seeder que inicializa la tabla de settings.
 */
class SettingSeeder extends Seeder
{
    public function run()
    {
        helper('setting');

        setting()->get('App.general', 'company') ?? setting()->set('App.general', 'Dulcerías Denny', 'company');
        setting()->get('App.general', 'phones') ?? setting()->set('App.general', '+52 (462) 113 09 53', 'phones');
        setting()->get('App.general', 'theme') ?? setting()->set('App.general', 'light', 'theme');
        setting()->get('App.general', 'favicon') ?? setting()->set('App.general', 'favicon.svg', 'favicon');
        setting()->get('App.general', 'background') ?? setting()->set('App.general', 'background.webp', 'background');
        setting()->get('App.general', 'logo') ?? setting()->set('App.general', 'logo.svg', 'logo');
    }
}
