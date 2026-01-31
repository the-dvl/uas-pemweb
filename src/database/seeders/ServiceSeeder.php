<?php
// src/database/seeders/ServiceSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'service_code' => 'DS-PRED-001',
                'name' => 'Predictive Analytics & Machine Learning',
                'slug' => 'predictive-analytics-machine-learning',
                'short_description' => 'Mengembangkan model prediktif untuk forecasting, classification, dan recommendation menggunakan algoritma machine learning terkini.',
                'full_description' => 'Layanan komprehensif untuk membangun dan mengimplementasikan model machine learning yang dapat memprediksi tren masa depan, mengklasifikasikan data, dan memberikan rekomendasi yang akurat. Kami menggunakan algoritma terbaru seperti Random Forest, XGBoost, dan Neural Networks untuk memberikan hasil yang optimal.',
                'icon_class' => 'bi-robot',
                'icon_url' => null,
                'category' => 'analytics',
                'features' => json_encode([
                    'Model development & training',
                    'Hyperparameter tuning',
                    'Model validation & testing',
                    'API deployment',
                    'Performance monitoring'
                ]),
                'technologies' => json_encode([
                    'Python', 'Scikit-learn', 'TensorFlow', 'PyTorch', 'MLflow'
                ]),
                'deliverables' => json_encode([
                    'Trained ML model',
                    'Model documentation',
                    'API endpoint',
                    'Performance report',
                    'Retraining pipeline'
                ]),
                'duration_days' => 60,
                'starting_price' => 150000000.00,
                'price_unit' => 'project',
                'is_popular' => true,
                'is_active' => true,
                'display_order' => 1,
                'meta_title' => 'Predictive Analytics Services - Machine Learning Solutions',
                'meta_description' => 'Layanan predictive analytics dan machine learning untuk prediksi bisnis, classification, dan recommendation systems.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'DS-DASH-002',
                'name' => 'Business Intelligence Dashboard',
                'slug' => 'business-intelligence-dashboard',
                'short_description' => 'Membangun dashboard interaktif dan real-time untuk monitoring performa bisnis dengan visualisasi data yang powerful.',
                'full_description' => 'Transformasikan data kompleks menjadi insight visual yang mudah dipahami dengan dashboard BI custom. Dashboard kami memberikan visibilitas real-time terhadap KPI bisnis, dilengkapi dengan drill-down capabilities, alerting system, dan mobile responsive design.',
                'icon_class' => 'bi-speedometer2',
                'icon_url' => null,
                'category' => 'visualization',
                'features' => json_encode([
                    'Real-time data updates',
                    'Interactive visualizations',
                    'Custom KPI tracking',
                    'Role-based access',
                    'Mobile responsive'
                ]),
                'technologies' => json_encode([
                    'Tableau', 'Power BI', 'React', 'D3.js', 'Plotly'
                ]),
                'deliverables' => json_encode([
                    'Fully functional dashboard',
                    'User documentation',
                    'Admin training',
                    'Source code',
                    'Deployment guide'
                ]),
                'duration_days' => 45,
                'starting_price' => 85000000.00,
                'price_unit' => 'project',
                'is_popular' => true,
                'is_active' => true,
                'display_order' => 2,
                'meta_title' => 'Custom Business Intelligence Dashboard Development',
                'meta_description' => 'Pembangunan dashboard BI interaktif untuk monitoring performa bisnis dengan visualisasi data real-time.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'DS-CON-003',
                'name' => 'Data Science Consulting & Strategy',
                'slug' => 'data-science-consulting-strategy',
                'short_description' => 'Konsultasi end-to-end untuk membantu perusahaan merencanakan dan mengimplementasikan strategi data science yang efektif.',
                'full_description' => 'Tim konsultan kami akan bekerja bersama Anda untuk mengidentifikasi peluang penggunaan data, merancang arsitektur data yang scalable, dan mengembangkan roadmap implementasi data science yang aligned dengan tujuan bisnis.',
                'icon_class' => 'bi-gear',
                'icon_url' => null,
                'category' => 'consulting',
                'features' => json_encode([
                    'Business needs assessment',
                    'Data maturity evaluation',
                    'Solution architecture design',
                    'Implementation roadmap',
                    'ROI analysis'
                ]),
                'technologies' => json_encode([
                    'Strategy frameworks', 'Business analysis tools', 'Data governance'
                ]),
                'deliverables' => json_encode([
                    'Assessment report',
                    'Solution architecture',
                    'Implementation plan',
                    'ROI projection',
                    'Change management guide'
                ]),
                'duration_days' => 30,
                'starting_price' => 75000000.00,
                'price_unit' => 'project',
                'is_popular' => false,
                'is_active' => true,
                'display_order' => 3,
                'meta_title' => 'Data Science Consulting Services - Strategy & Planning',
                'meta_description' => 'Layanan konsultasi data science untuk membantu perusahaan merencanakan dan mengimplementasikan strategi data yang efektif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'DS-ENG-004',
                'name' => 'Data Engineering & Pipeline',
                'slug' => 'data-engineering-pipeline',
                'short_description' => 'Membangun data pipeline yang scalable dan robust untuk mengumpulkan, memproses, dan menyimpan data secara efisien.',
                'full_description' => 'Kami membangun end-to-end data pipeline yang dapat menangani data dalam skala besar dengan reliability tinggi. Solusi kami mencakup data ingestion, transformation, storage, dan orchestration menggunakan teknologi modern seperti Apache Airflow, Spark, dan cloud platforms.',
                'icon_class' => 'bi-database-gear',
                'icon_url' => null,
                'category' => 'engineering',
                'features' => json_encode([
                    'Data ingestion from multiple sources',
                    'ETL/ELT pipeline development',
                    'Data quality monitoring',
                    'Scalable architecture',
                    'Automated workflows'
                ]),
                'technologies' => json_encode([
                    'Apache Airflow', 'Spark', 'Kafka', 'AWS Glue', 'Snowflake'
                ]),
                'deliverables' => json_encode([
                    'Data pipeline architecture',
                    'ETL/ELT codebase',
                    'Monitoring dashboard',
                    'Documentation',
                    'Deployment scripts'
                ]),
                'duration_days' => 75,
                'starting_price' => 125000000.00,
                'price_unit' => 'project',
                'is_popular' => false,
                'is_active' => true,
                'display_order' => 4,
                'meta_title' => 'Data Engineering Services - Pipeline Development & ETL',
                'meta_description' => 'Pembangunan data pipeline dan engineering solutions untuk mengelola big data secara efisien dan scalable.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_code' => 'DS-TRAIN-005',
                'name' => 'Data Science Training & Workshops',
                'slug' => 'data-science-training-workshops',
                'short_description' => 'Program pelatihan dan workshop untuk meningkatkan kapabilitas tim internal dalam bidang data science dan analytics.',
                'full_description' => 'Kami menyediakan training programs yang disesuaikan dengan kebutuhan perusahaan, mulai dari basic data literacy hingga advanced machine learning techniques. Metode pembelajaran mencakup workshop, hands-on projects, dan mentorship program.',
                'icon_class' => 'bi-mortarboard',
                'icon_url' => null,
                'category' => 'training',
                'features' => json_encode([
                    'Customized curriculum',
                    'Hands-on projects',
                    'Industry expert trainers',
                    'Post-training support',
                    'Certification'
                ]),
                'technologies' => json_encode([
                    'Python', 'SQL', 'Tableau', 'Machine Learning basics'
                ]),
                'deliverables' => json_encode([
                    'Training materials',
                    'Hands-on exercises',
                    'Progress reports',
                    'Certificates',
                    'Post-training resources'
                ]),
                'duration_days' => 10,
                'starting_price' => 35000000.00,
                'price_unit' => 'training',
                'is_popular' => false,
                'is_active' => true,
                'display_order' => 5,
                'meta_title' => 'Data Science Training & Workshop Services',
                'meta_description' => 'Program pelatihan dan workshop data science untuk meningkatkan kapabilitas analytics tim internal perusahaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('services')->insert($services);
        $this->command->info('Services seeded successfully!');
    }
}
