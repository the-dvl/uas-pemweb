<?php
// src/database/seeders/HeroSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
            [
                'name' => 'Dr. Andi Pratama',
                'title' => 'Lead Data Scientist',
                'specialization' => 'Machine Learning & AI',
                'bio' => 'PhD in Computer Science dengan spesialisasi Machine Learning. 10+ tahun pengalaman dalam mengembangkan model prediktif untuk industri finansial dan retail. Telah memimpin 50+ proyek analytics skala enterprise.',
                'skills' => json_encode(['Python', 'TensorFlow', 'PyTorch', 'SQL', 'Big Data', 'MLOps']),
                'technologies' => json_encode(['AWS SageMaker', 'Google AI Platform', 'Apache Spark', 'Kubernetes']),
                'years_experience' => 12,
                'projects_completed' => 56,
                'success_rate' => 94.50,
                'avatar_url' => '/assets/images/team/andi-pratama.jpg',
                'linkedin_url' => 'https://linkedin.com/in/andipratama',
                'github_url' => 'https://github.com/andipratama',
                'is_available' => true,
                'rating' => 5,
                'certifications' => json_encode([
                    'AWS Certified Machine Learning - Specialty',
                    'Google Professional Data Engineer',
                    'TensorFlow Developer Certificate'
                ]),
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Mulyani',
                'title' => 'Senior Data Engineer',
                'specialization' => 'Data Pipeline & Infrastructure',
                'bio' => 'Spesialis dalam membangun data pipeline yang scalable dan robust. Pengalaman 8+ tahun dengan big data technologies. Berhasil mengoptimalkan processing time hingga 70% untuk klien e-commerce terkemuka.',
                'skills' => json_encode(['Apache Spark', 'Airflow', 'Kafka', 'Docker', 'AWS', 'Data Warehousing']),
                'technologies' => json_encode(['Apache Hadoop', 'Snowflake', 'Redshift', 'Databricks']),
                'years_experience' => 9,
                'projects_completed' => 42,
                'success_rate' => 96.20,
                'avatar_url' => '/assets/images/team/siti-mulyani.jpg',
                'linkedin_url' => 'https://linkedin.com/in/sitimulyani',
                'github_url' => 'https://github.com/sitimulyani',
                'is_available' => true,
                'rating' => 5,
                'certifications' => json_encode([
                    'AWS Certified Solutions Architect',
                    'Google Cloud Professional Data Engineer',
                    'Databricks Certified Associate Developer'
                ]),
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rizki Ramadhan',
                'title' => 'Business Intelligence Analyst',
                'specialization' => 'Data Visualization & Analytics',
                'bio' => 'Ahli dalam mentransformasi data kompleks menjadi insight bisnis yang actionable. 7+ tahun pengalaman membantu perusahaan membuat keputusan berbasis data melalui dashboard dan visualisasi interaktif.',
                'skills' => json_encode(['Tableau', 'Power BI', 'SQL', 'Python', 'Statistics', 'Dashboard Design']),
                'technologies' => json_encode(['Looker', 'Superset', 'D3.js', 'Plotly']),
                'years_experience' => 8,
                'projects_completed' => 38,
                'success_rate' => 92.80,
                'avatar_url' => '/assets/images/team/rizki-ramadhan.jpg',
                'linkedin_url' => 'https://linkedin.com/in/rizkiramadhan',
                'github_url' => 'https://github.com/rizkiramadhan',
                'is_available' => false,
                'rating' => 4,
                'certifications' => json_encode([
                    'Tableau Desktop Specialist',
                    'Microsoft Certified: Power BI Data Analyst',
                    'Google Analytics Individual Qualification'
                ]),
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maya Indah Sari',
                'title' => 'Data Science Consultant',
                'specialization' => 'Business Strategy & Analytics',
                'bio' => 'MBA holder dengan background teknik yang kuat. Berpengalaman menghubungkan insight teknis dengan strategi bisnis. Telah membantu 30+ perusahaan meningkatkan revenue melalui data-driven decision making.',
                'skills' => json_encode(['Business Strategy', 'Data Storytelling', 'Python', 'SQL', 'Market Analysis']),
                'technologies' => json_encode(['Jupyter', 'R Studio', 'Excel Advanced Analytics']),
                'years_experience' => 11,
                'projects_completed' => 47,
                'success_rate' => 95.10,
                'avatar_url' => '/assets/images/team/maya-indah.jpg',
                'linkedin_url' => 'https://linkedin.com/in/mayaindah',
                'github_url' => 'https://github.com/mayaindah',
                'is_available' => true,
                'rating' => 5,
                'certifications' => json_encode([
                    'Project Management Professional (PMP)',
                    'Certified Analytics Professional (CAP)',
                    'Scrum Master Certified'
                ]),
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $this->command->info('Heroes seeded successfully!');
    }
}
