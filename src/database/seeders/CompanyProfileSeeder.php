<?php
// src/database/seeders/CompanyProfileSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_profiles')->insert([
            [
                'company_name' => 'DataInsight Analytics',
                'tagline' => 'Transforming Data into Strategic Advantage',
                'description' => 'Perusahaan outsourcing Data Science terkemuka yang membantu bisnis mengubah data mentah menjadi insight berharga untuk pengambilan keputusan strategis. Kami menyediakan solusi analytics end-to-end dengan teknologi terkini dan tim ahli bersertifikasi.',
                'email' => 'hello@datainsight-analytics.com',
                'phone' => '+62 21 1234 5678',
                'address' => 'Gedung Bisnis Tower, Lantai 12',
                'city' => 'Jakarta Selatan',
                'province' => 'DKI Jakarta',
                'postal_code' => '12940',
                'website' => 'https://datainsight-analytics.com',
                'logo_url' => '/assets/images/logo.png',
                'favicon_url' => '/assets/images/favicon.ico',
                'social_media' => json_encode([
                    'facebook' => 'https://facebook.com/datainsight',
                    'twitter' => 'https://twitter.com/datainsight',
                    'linkedin' => 'https://linkedin.com/company/datainsight',
                    'instagram' => 'https://instagram.com/datainsight.id'
                ]),
                'business_hours' => json_encode([
                    'monday_friday' => '09:00 - 18:00',
                    'saturday' => '09:00 - 15:00',
                    'sunday' => 'Closed'
                ]),
                'mission' => 'Memberdayakan bisnis dengan solusi data science yang inovatif dan terjangkau untuk mendorong pertumbuhan yang berkelanjutan.',
                'vision' => 'Menjadi mitra terpercaya nomor satu dalam transformasi digital berbasis data di Asia Tenggara.',
                'values' => 'Integritas, Inovasi, Kolaborasi, Excellence, Customer-centric',
                'years_experience' => 8,
                'projects_completed' => 347,
                'happy_clients' => 128,
                'data_scientists' => 42,
                'meta_title' => 'DataInsight Analytics - Outsourcing Data Science Profesional',
                'meta_description' => 'Layanan outsourcing Data Science untuk analisis bisnis, predictive modeling, dan business intelligence. Solusi end-to-end untuk transformasi digital perusahaan.',
                'meta_keywords' => json_encode(['data science', 'analytics', 'machine learning', 'business intelligence', 'outsourcing']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        $this->command->info('Company profile seeded successfully!');
    }
}
