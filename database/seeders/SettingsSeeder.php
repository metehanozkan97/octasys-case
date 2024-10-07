<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->insert([
            // INVOICE
            'invoice_currency' => null,
            'invoice_name' => null,
            'invoice_website' => null,
            'invoice_address' => null,
            'invoice_city' => null,
            'invoice_state' => null,
            'invoice_postal' => null,
            'invoice_country' => null,
            'invoice_phone' => null,
            'invoice_vat' => null,

            // PAYMENT
            'default_currency' => '2',
            'tax_rate' => null,
            'stripe_active' => 0,
            'stripe_key' => null,
            'stripe_secret' => null,
            'stripe_base_url' => 'https://api.stripe.com',
            'bank_transfer_active' => 0,
            'bank_transfer_instructions' => null,
            'bank_transfer_informations' => null,

            // GLOBAL SETTINGS
            'site_name' => 'MagicAI',
            'site_url' => 'https://liquid-themes.com',
            'site_email' => null,
            'google_analytics_active' => 0,
            'google_analytics_code' => null,
            'logo' => 'magicAI-logo.svg',
            'favicon' => null,
            'meta_title' => null,
            'meta_description' => null,

            // SOCIAL LOGIN
            'facebook_active' => 0,
            'facebook_api_key' => null,
            'facebook_api_secret' => null,
            'facebook_redirect_url' => null,

            'github_active' => 0,
            'github_api_key' => null,
            'github_api_secret' => null,
            'github_redirect_url' => null,

            'google_active' => 0,
            'google_api_key' => null,
            'google_api_secret' => null,
            'google_redirect_url' => null,

            'twitter_active' => 0,
            'twitter_api_key' => null,
            'twitter_api_secret' => null,
            'twitter_redirect_url' => null,

            // REGISTER
            'register_active' => 1,
            'default_country' => 'United States',

            // SMTP
            'smtp_host' => null,
            'smtp_port' => null,
            'smtp_username' => null,
            'smtp_password' => null,
            'smtp_email' => null,
            'smtp_sender_name' => null,
            'smtp_encryption' => 'TLS',

            // OPENAI
            'openai_api_secret' => null,
        ]);
    }
}
