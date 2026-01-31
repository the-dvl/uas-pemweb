<?php
// src/database/seeders/ServiceRequestSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServiceRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requests = [
            [
                'request_code' => 'SR-20250115-0001',
                'contact_id' => 1,
                'service_id' => 1,
                'project_description' => 'Mengembangkan model predictive analytics untuk memprediksi customer churn dalam 6 bulan ke depan berdasarkan historical transaction data.',
                'requirements' => json_encode([
                    'accuracy_target' => '>85%',
                    'data_sources' => ['CRM', 'transaction_database', 'web_analytics'],
                    'output_format' => 'API endpoint + dashboard'
                ]),
                'data_sources' => json_encode([
                    'customer_demographics' => 'MySQL database',
                    'purchase_history' => 'PostgreSQL',
                    'website_interactions' => 'Google Analytics API'
                ]),
                'industry' => 'E-commerce',
                'company_size' => 250,
                'priority' => 'high',
                'status' => 'accepted',
                'estimated_budget' => 175000000.00,
                'quoted_price' => 185000000.00,
                'desired_start_date' => Carbon::now()->addDays(7),
                'desired_end_date' => Carbon::now()->addMonths(3),
                'attachments' => json_encode([
                    'data_dictionary.pdf',
                    'sample_dataset.csv',
                    'current_reporting_structure.docx'
                ]),
                'assigned_sales_rep' => 1,
                'assigned_data_scientist' => 1,
                'internal_notes' => 'Client sudah final meeting. Project kickoff minggu depan.',
                'client_notes' => 'Mohon diperhatikan data privacy concerns.',
                'submitted_at' => Carbon::now()->subDays(15),
                'quoted_at' => Carbon::now()->subDays(12),
                'accepted_at' => Carbon::now()->subDays(10),
                'created_at' => Carbon::now()->subDays(15),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'request_code' => 'SR-20250120-0002',
                'contact_id' => 2,
                'service_id' => 2,
                'project_description' => 'Membangun real-time dashboard untuk monitoring user engagement metrics pada platform SaaS fintech.',
                'requirements' => json_encode([
                    'update_frequency' => 'real-time',
                    'user_count' => '1000+ concurrent users',
                    'mobile_responsive' => true,
                    'custom_alerting' => true
                ]),
                'data_sources' => json_encode([
                    'user_activity' => 'Kafka stream',
                    'transaction_data' => 'MongoDB',
                    'server_logs' => 'Elasticsearch'
                ]),
                'industry' => 'Fintech',
                'company_size' => 50,
                'priority' => 'medium',
                'status' => 'quoted',
                'estimated_budget' => 85000000.00,
                'quoted_price' => 95000000.00,
                'desired_start_date' => Carbon::now()->addDays(14),
                'desired_end_date' => Carbon::now()->addMonths(2),
                'attachments' => json_encode([
                    'current_dashboard_screenshot.png',
                    'api_documentation.pdf',
                    'brand_guidelines.pdf'
                ]),
                'assigned_sales_rep' => 1,
                'assigned_data_scientist' => 2,
                'internal_notes' => 'Menunggu approval dari CTO client.',
                'client_notes' => 'Bisa dikurangi fitur tertentu untuk adjust budget?',
                'submitted_at' => Carbon::now()->subDays(8),
                'quoted_at' => Carbon::now()->subDays(5),
                'accepted_at' => null,
                'created_at' => Carbon::now()->subDays(8),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'request_code' => 'SR-20250125-0003',
                'contact_id' => 3,
                'service_id' => 3,
                'project_description' => 'Analisis data penjualan dan prediksi permintaan produk untuk bisnis makanan sehat UMKM.',
                'requirements' => json_encode([
                    'simple_interface' => true,
                    'training_included' => true,
                    'monthly_reporting' => true,
                    'budget_friendly' => true
                ]),
                'data_sources' => json_encode([
                    'sales_data' => 'Excel files',
                    'inventory' => 'Google Sheets',
                    'customer_feedback' => 'Survey forms'
                ]),
                'industry' => 'Food & Beverage',
                'company_size' => 8,
                'priority' => 'low',
                'status' => 'reviewing',
                'estimated_budget' => 25000000.00,
                'quoted_price' => null,
                'desired_start_date' => Carbon::now()->addDays(30),
                'desired_end_date' => Carbon::now()->addMonths(4),
                'attachments' => json_encode([
                    'sales_data_2024.xlsx',
                    'product_catalog.pdf'
                ]),
                'assigned_sales_rep' => 2,
                'assigned_data_scientist' => null,
                'internal_notes' => 'Pakai paket UMKM khusus. Review oleh senior DS.',
                'client_notes' => 'Saya baru belajar data analytics, mohon bimbingannya.',
                'submitted_at' => Carbon::now()->subDays(2),
                'quoted_at' => null,
                'accepted_at' => null,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subHours(6),
            ],
            [
                'request_code' => 'SR-20250128-0004',
                'contact_id' => 4,
                'service_id' => 4,
                'project_description' => 'Digital transformation program dengan fokus data analytics untuk enterprise dengan 5000+ employees.',
                'requirements' => json_encode([
                    'enterprise_grade' => true,
                    'multi_department' => true,
                    'integration_existing_systems' => true,
                    'training_program' => true,
                    'support_24_7' => true
                ]),
                'data_sources' => json_encode([
                    'erp_system' => 'SAP',
                    'crm' => 'Salesforce',
                    'hr_system' => 'Oracle HCM',
                    'legacy_databases' => 'Multiple sources'
                ]),
                'industry' => 'Conglomerate',
                'company_size' => 5200,
                'priority' => 'urgent',
                'status' => 'negotiation',
                'estimated_budget' => 850000000.00,
                'quoted_price' => 975000000.00,
                'desired_start_date' => Carbon::now()->addDays(45),
                'desired_end_date' => Carbon::now()->addMonths(18),
                'attachments' => json_encode([
                    'rfp_document.pdf',
                    'current_architecture.pptx',
                    'compliance_requirements.docx'
                ]),
                'assigned_sales_rep' => 3,
                'assigned_data_scientist' => 4,
                'internal_notes' => 'Project besar, butuh approval dari management. Meeting dengan CIO besok.',
                'client_notes' => 'Kami ingin phased approach dengan proof of concept terlebih dahulu.',
                'submitted_at' => Carbon::now()->subDays(5),
                'quoted_at' => Carbon::now()->subDays(3),
                'accepted_at' => null,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subHours(12),
            ],
        ];

        DB::table('service_requests')->insert($requests);
        $this->command->info('Service requests seeded successfully!');
    }
}
