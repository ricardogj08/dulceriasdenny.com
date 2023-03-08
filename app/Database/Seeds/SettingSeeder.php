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

        setting()->get('App.general', 'theme') ?? setting()->set('App.general', 'cupcake', 'theme');

        setting()->get('App.general', 'favicon') ?? setting()->set('App.general', '1678292649_4bc0852ee99838aa6e20.svg', 'favicon');

        setting()->get('App.general', 'background') ?? setting()->set('App.general', '1678292649_4ca25425bbc7b8688400.webp', 'background');

        setting()->get('App.general', 'logo') ?? setting()->set('App.general', '1678292649_2702ef3b2a0c3e23312f.svg', 'logo');

        setting()->get('App.emails', 'to') ?? setting()->set('App.emails', 'pruebas@genotipo.com', 'to');

        // setting()->get('App.emails', 'cc') ?? setting()->set('App.emails', 'leads@genotipo.com', 'cc');

        setting()->get('App.emails', 'bcc') ?? setting()->set('App.emails', 'ricardo@genotipo.com', 'bcc');
    }
}
