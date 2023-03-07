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
                'icon'  => 'ri-facebook-circle-fill',
            ],
            [
                'name'  => 'Instagram',
                'alias' => 'instagram',
                'icon'  => 'ri-instagram-fill'
            ],
            [
                'name'  => 'LinkedIn',
                'alias' => 'linkedin',
                'icon'  => 'ri-linkedin-fill'
            ],
            [
                'name'  => 'Messenger',
                'alias' => 'messenger',
                'icon'  => 'ri-messenger-fill'
            ],
            [
                'name'  => 'Pinterest',
                'alias' => 'pinterest',
                'icon'  => 'ri-pinterest-fill'
            ],
            [
                'name'  => 'Skype',
                'alias' => 'skype',
                'icon'  => 'ri-skype-fill'
            ],
            [
                'name'  => 'Snapchat',
                'alias' => 'snapchat',
                'icon'  => 'ri-snapchat-fill'
            ],
            [
                'name'  => 'Telegram',
                'alias' => 'telegram',
                'icon'  => 'ri-telegram-fill'
            ],
            [
                'name'  => 'TikTok',
                'alias' => 'tiktok',
                'icon'  => 'ri-chat-3-fill'
            ],
            [
                'name'  => 'TripAdvisor',
                'alias' => 'tripadvisor',
                'icon'  => 'ri-chat-3-fill'
            ],
            [
                'name'  => 'Twitter',
                'alias' => 'twitter',
                'icon'  => 'ri-twitter-fill'
            ],
            [
                'name'  => 'WhatsApp',
                'alias' => 'whatsapp',
                'icon'  => 'ri-whatsapp-fill'
            ],
            [
                'name'  => 'YouTube',
                'alias' => 'youtube',
                'icon'  => 'ri-youtube-fill'
            ],
        ]);
    }
}
