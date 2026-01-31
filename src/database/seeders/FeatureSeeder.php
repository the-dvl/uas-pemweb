<?php
// src/database/seeders/FeatureSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'name' => 'Predictive Analytics',
                'slug' => 'predictive-analytics',
                'description' => 'Memprediksi tren masa depan dengan algoritma machine learning untuk membantu perencanaan strategis.',
                'benefits' => 'Mengurangi risiko, mengoptimalkan inventori, meningkatkan akurasi peramalan.',
                'icon_class' => 'bi-graph-up-arrow',
                'icon_url' => null,
                'category' => 'analytics',
                'technical_details' => json_encode([
                    'algorithms' => ['Random Forest', 'XGBoost', 'Neural Networks'],
                    'languages' => ['Python', 'R'],
                    'tools' => ['Scikit-learn', 'TensorFlow', 'PyTorch']
                ]),
                'use_cases' => json_encode([
                    'Customer churn prediction',
                    'Sales forecasting',
                    'Demand prediction'
                ]),
                'display_order' => 1,
                'is_highlighted' => true,
                'is_active' => true,
                'service_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Real-time Dashboard',
                'slug' => 'real-time-dashboard',
                'description' => 'Dashboard interaktif dengan update real-time untuk monitoring performa bisnis secara live.',
                'benefits' => 'Keputusan lebih cepat, visibilitas real-time, identifikasi masalah secara instan.',
                'icon_class' => 'bi-speedometer2',
                'icon_url' => null,
                'category' => 'platform',
                'technical_details' => json_encode([
                    'frameworks' => ['React', 'Vue.js'],
                    'libraries' => ['D3.js', 'Chart.js', 'Plotly'],
                    'backends' => ['Node.js', 'Laravel']
                ]),
                'use_cases' => json_encode([
                    'Sales performance monitoring',
                    'Social media analytics',
                    'Operational efficiency tracking'
                ]),
                'display_order' => 2,
                'is_highlighted' => true,
                'is_active' => true,
                'service_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Security & Compliance',
                'slug' => 'data-security-compliance',
                'description' => 'Keamanan data end-to-end dengan enkripsi dan compliance terhadap regulasi privasi data.',
                'benefits' => 'Data terlindungi, compliance dengan GDPR/PDP, mengurangi risiko kebocoran data.',
                'icon_class' => 'bi-shield-check',
                'icon_url' => null,
                'category' => 'security',
                'technical_details' => json_encode([
                    'encryption' => ['AES-256', 'SSL/TLS'],
                    'compliance' => ['GDPR', 'PDP Indonesia', 'ISO 27001'],
                    'tools' => ['Vault', 'Keycloak']
                ]),
                'use_cases' => json_encode([
                    'Financial data protection',
                    'Healthcare data compliance',
                    'Enterprise data governance'
                ]),
                'display_order' => 3,
                'is_highlighted' => false,
                'is_active' => true,
                'service_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Automated Reporting',
                'slug' => 'automated-reporting',
                'description' => 'Generate laporan otomatis dengan schedule yang dapat disesuaikan dalam berbagai format.',
                'benefits' => 'Menghemat waktu, konsistensi laporan, distribusi otomatis.',
                'icon_class' => 'bi-file-earmark-text',
                'icon_url' => null,
                'category' => 'reporting',
                'technical_details' => json_encode([
                    'formats' => ['PDF', 'Excel', 'HTML', 'PowerPoint'],
                    'automation' => ['Cron jobs', 'Airflow', 'Celery'],
                    'templates' => ['Customizable', 'Branded']
                ]),
                'use_cases' => json_encode([
                    'Monthly performance reports',
                    'Executive summaries',
                    'Regulatory compliance reports'
                ]),
                'display_order' => 4,
                'is_highlighted' => false,
                'is_active' => true,
                'service_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Team Collaboration Tools',
                'slug' => 'team-collaboration-tools',
                'description' => 'Platform kolaborasi untuk tim data science dan stakeholder bisnis.',
                'benefits' => 'Komunikasi lebih baik, version control, workflow management.',
                'icon_class' => 'bi-people-fill',
                'icon_url' => null,
                'category' => 'collaboration',
                'technical_details' => json_encode([
                    'features' => ['Commenting', 'Version history', 'Task assignment'],
                    'integration' => ['Slack', 'Microsoft Teams', 'Jira']
                ]),
                'use_cases' => json_encode([
                    'Cross-department collaboration',
                    'Client feedback management',
                    'Project tracking'
                ]),
                'display_order' => 5,
                'is_highlighted' => false,
                'is_active' => true,
                'service_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('features')->insert($features);
        $this->command->info('Features seeded successfully!');
    }
}
