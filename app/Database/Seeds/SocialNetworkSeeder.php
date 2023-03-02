<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Seeder que inicializa la tabla de las redes sociales de la empresa.
 */
class SocialNetworkSeeder extends Seeder
{
    public function run()
    {
        $socialNetworkModel = model('SocialNetworkModel');

        $socialNetworkModel->ignore(true)->InsertBatch([
            [
                'name'  => 'Facebook',
                'alias' => 'facebook',
            ],
            [
                'name'  => 'Instagram',
                'alias' => 'instagram',
            ],
            [
                'name'  => 'LinkedIn',
                'alias' => 'linkedin',
            ],
            [
                'name'  => 'Messenger',
                'alias' => 'messenger',
            ],
            [
                'name'  => 'Pinterest',
                'alias' => 'pinterest',
            ],
            [
                'name'  => 'Skype',
                'alias' => 'skype',
            ],
            [
                'name'  => 'Snapchat',
                'alias' => 'snapchat',
            ],
            [
                'name'  => 'Telegram',
                'alias' => 'telegram',
            ],
            [
                'name'  => 'TikTok',
                'alias' => 'tiktok',
            ],
            [
                'name'  => 'TripAdvisor',
                'alias' => 'tripadvisor',
            ],
            [
                'name'  => 'Twitter',
                'alias' => 'twitter',
            ],
            [
                'name'  => 'WhatsApp',
                'alias' => 'whatsapp',
            ],
            [
                'name'  => 'YouTube',
                'alias' => 'youtube',
            ],
        ]);
    }
}
