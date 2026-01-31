<?php
// src/database/seeders/ContactSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@perusahaanx.com',
                'phone' => '+62 812 3456 7890',
                'company' => 'PT Perusahaan X',
                'position' => 'Head of Business Intelligence',
                'subject' => 'sales',
                'message' => 'Saya tertarik dengan layanan predictive analytics untuk analisis customer churn. Bisakah kita jadwalkan meeting untuk diskusi lebih lanjut?',
                'interests' => json_encode(['predictive_analytics', 'customer_analytics']),
                'budget_range' => '50-200jt',
                'project_timeline' => '3_months',
                'status' => 'replied',
                'admin_notes' => 'Client dari industri retail. Sudah dihubungi via Zoom meeting tanggal 15 Januari.',
                'ip_address' => '192.168.1.100',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'replied_at' => Carbon::now()->subDays(5),
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'name' => 'Sari Dewi',
                'email' => 'sari.dewi@startup-tech.id',
                'phone' => '+62 878 9012 3456',
                'company' => 'Startup Tech Indonesia',
                'position' => 'CEO',
                'subject' => 'general',
                'message' => 'Kami mencari partner untuk mengembangkan dashboard real-time analytics untuk platform SaaS kami. Apakah ini dalam scope layanan Anda?',
                'interests' => json_encode(['dashboard', 'real_time_analytics']),
                'budget_range' => '10-50jt',
                'project_timeline' => '1_month',
                'status' => 'in_progress',
                'admin_notes' => 'Startup di bidang fintech. Sudah dikirim proposal dan menunggu konfirmasi.',
                'ip_address' => '203.123.45.67',
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36',
                'replied_at' => Carbon::now()->subDays(2),
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'name' => 'Rudi Hartono',
                'email' => 'rudi.hartono@gmail.com',
                'phone' => '+62 811 2233 4455',
                'company' => 'UMKM Makanan Sehat',
                'position' => 'Owner',
                'subject' => 'support',
                'message' => 'Saya butuh bantuan untuk analisis data penjualan dan prediksi permintaan produk. Budget terbatas, apakah ada paket untuk UMKM?',
                'interests' => json_encode(['sales_analytics', 'demand_forecasting']),
                'budget_range' => '<10jt',
                'project_timeline' => 'not_sure',
                'status' => 'new',
                'admin_notes' => null,
                'ip_address' => '125.160.12.34',
                'user_agent' => 'Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36',
                'replied_at' => null,
                'created_at' => Carbon::now()->subHours(3),
                'updated_at' => Carbon::now()->subHours(3),
            ],
            [
                'name' => 'Anita Wijaya',
                'email' => 'anita.wijaya@corporate-group.co.id',
                'phone' => '+62 21 9876 5432',
                'company' => 'Corporate Group Indonesia',
                'position' => 'CTO',
                'subject' => 'partnership',
                'message' => 'Kami mencari partner jangka panjang untuk digital transformation dengan fokus pada data analytics. Mungkin kita bisa explore partnership model.',
                'interests' => json_encode(['digital_transformation', 'enterprise_analytics']),
                'budget_range' => '>200jt',
                'project_timeline' => '6_months',
                'status' => 'read',
                'admin_notes' => 'Perusahaan besar dengan 5000+ employees. Prioritas tinggi.',
                'ip_address' => '202.152.45.89',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0',
                'replied_at' => null,
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now()->subHours(12),
            ],
        ];

        DB::table('contacts')->insert($contacts);
        $this->command->info('Contacts seeded successfully!');
    }
}
