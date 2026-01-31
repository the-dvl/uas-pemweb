UAS PEMWEB - Data Science Platform
Oleh: 20220803030 - DEVAL ALESSANDRO ABDULLAH
1. PROJEK OVERVIEW
1.1. Deskripsi Proyek
Membangun website perusahaan outsourcing Data Science yang mengimplementasikan konsep dari Systematic Literature Review (SLR) dan Business Requirements Document (BRD) yang telah dibuat.

1.2. Tech Stack yang Digunakan
Framework: Laravel 11

Frontend: Bootstrap 5 + Laravel Blade

Database: MySQL

Template: Nova Bootstrap 5 Beta 1 (ThemeWagon)

Tools: Docker, Composer, Node.js

2. PROSES PENELITIAN & PERANCANGAN
2.1. Systematic Literature Review (SLR)
Tema: Implementasi Aplikasi Web Berbasis Laravel Filament sebagai Solusi Transformasi Digital pada UMKM

Research Questions:

RQ1: Bagaimana penerapan sistem web berbasis Laravel Filament dapat membantu UMKM?

RQ2: Sejauh mana sistem berbasis web meningkatkan efisiensi?

RQ3: Apa faktor keberhasilan dan kendala implementasi?

Metodologi: SLR dengan studi literatur 2018-2025

2.2. Business Requirements Document (BRD)
Platform: Digitalisasi Process Flow Pengajuan dan Persetujuan Sidang Skripsi

Fitur Utama:

Modul pengajuan sidang oleh mahasiswa

Modul verifikasi dan approval oleh admin

Sistem Tanda Tangan Elektronik (TTE)

Dashboard reporting untuk admin

3. IMPLEMENTASI WEBSITE
3.1. Struktur Proyek
bash
uts-pemweb/
├── src/
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   │   ├── migrations/
│   │   │   ├── 2026_01_31_092658_create_company_profiles_table.php
│   │   │   ├── 2026_01_31_093156_create_services_table.php
│   │   │   ├── 2026_01_31_095151_create_features_table.php
│   │   │   ├── 2026_01_31_100119_create_contacts_table.php
│   │   │   └── 2026_01_31_101238_create_service_requests_table.php
│   │   └── seeders/
│   │       ├── CompanyProfileSeeder.php
│   │       ├── ServiceSeeder.php
│   │       ├── FeatureSeeder.php
│   │       ├── HeroSeeder.php
│   │       ├── ContactSeeder.php
│   │       └── ServiceRequestSeeder.php
│   ├── public/
│   │   ├── assets/
│   │   │   ├── css/
│   │   │   ├── js/
│   │   │   └── images/
│   ├── resources/
│   │   └── views/
│   │       ├── layouts/
│   │       │   └── app.blade.php
│   │       ├── pages/
│   │       │   ├── home.blade.php
│   │       │   ├── services.blade.php
│   │       │   ├── about.blade.php
│   │       │   └── contact.blade.php
│   │       └── partials/
│   │           ├── header.blade.php
│   │           ├── footer.blade.php
│   │           └── scripts.blade.php
│   ├── routes/
│   │   └── web.php
│   └── .env
3.2. Template yang Digunakan
Source: https://themewagon.com/themes/nova-bootstrap5_beta1/

Alasan Pemilihan:

Modern dan professional design

Fully responsive

Clean code structure

Bootstrap 5 compatibility

Business-oriented layout

3.3. Setup & Installation
bash
# 1. Clone boilerplate
cd boilerplate
./start.sh uts-pemweb

# 2. Navigasi ke project
cd uts-pemweb
cd src

# 3. Install dependencies
composer install
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uts_pemweb
DB_USERNAME=root
DB_PASSWORD=

# 7. Run migrations
php artisan migrate

# 8. Seed database
php artisan db:seed

# 9. Link storage
php artisan storage:link

# 10. Run development server
php artisan serve
3.4. Halaman Website yang Dibuat
Home Page (/) - Landing page dengan hero section, services preview, features

Services Page (/services) - Detail layanan Data Science yang ditawarkan

About Page (/about) - Profil perusahaan dan tim data scientist

Contact Page (/contact) - Form kontak dan informasi perusahaan

Admin Dashboard (/admin) - Area untuk manage data (jika diperlukan)

4. DATABASE IMPLEMENTASI
4.1. Tabel yang Dibuat
company_profiles - Informasi perusahaan

services - Layanan Data Science yang ditawarkan

features - Fitur-fitur platform

contacts - Data kontak dari pengunjung

heroes - Profil data scientist/tim ahli

service_requests - Permintaan layanan dari klien

4.2. Contoh Data Seeder
php
// Company Profile
[
    'company_name' => 'DataInsight Analytics',
    'tagline' => 'Transforming Data into Strategic Advantage',
    'description' => 'Perusahaan outsourcing Data Science terkemuka...',
    'email' => 'hello@datainsight-analytics.com',
    'phone' => '+62 21 1234 5678'
]

// Services
[
    'name' => 'Predictive Analytics & Machine Learning',
    'description' => 'Mengembangkan model prediktif untuk forecasting...',
    'starting_price' => 150000000.00
]
5. FITUR UTAMA WEBSITE
5.1. Frontend Features
✅ Responsive design (Desktop, Tablet, Mobile)

✅ Modern UI/UX dengan Bootstrap 5

✅ Interactive contact form

✅ Services showcase dengan pricing

✅ Team/heroes showcase

✅ Company profile section

5.2. Backend Features
✅ Database migration & seeding

✅ CRUD operations ready

✅ API endpoints (jika diperlukan)

✅ Form validation

✅ Email notification system

5.3. Business Logic
✅ Service request management

✅ Lead generation system

✅ Client inquiry tracking

✅ Service portfolio management

6. IMPLEMENTASI ROUTES
6.1. Web Routes (routes/web.php)
php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.detail');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/service-request', [ServiceController::class, 'storeRequest'])->name('service.request');

// Admin Routes (if needed)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
6.2. API Routes (routes/api.php)
php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ContactController;

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{id}', [ServiceController::class, 'show']);
Route::get('/features', [FeatureController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
7. TAMPILAN WEBSITE
7.1. Layout Components
blade
<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DataInsight Analytics')</title>
    <!-- Bootstrap 5 CSS -->
    <!-- Custom CSS -->
    <!-- Font Awesome -->
</head>
<body>
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>
7.2. Home Page Structure
blade
<!-- pages/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home - DataInsight Analytics')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Transforming Data into Strategic Advantage</h1>
        <p>Outsourcing Data Science solutions for your business growth</p>
    </section>

    <!-- Services Preview -->
    <section class="services-section">
        <h2>Our Services</h2>
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-4">
                <div class="service-card">
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->short_description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <h2>Why Choose Us</h2>
        <!-- Features list -->
    </section>
@endsection
8. PENGUJIAN & DEPLOYMENT
8.1. Testing
bash
# Run basic tests
php artisan test

# Check routes
php artisan route:list

# Check migrations status
php artisan migrate:status

# Clear cache
php artisan optimize:clear
8.2. Deployment Checklist
Update .env production settings

Run migrations in production

Seed essential data

Configure web server (Apache/Nginx)

Set up SSL certificate

Configure email services

Backup database

Monitor application logs

9. REFERENSI
9.1. Academic References
Prasetyo & Hidayat (2021) - Digital Transformation in SMEs Using Web-Based Systems

Nirmala et al. (2022) - Laravel Framework in Developing Scalable Business Applications

Putra (2023) - Implementation of Laravel Filament in Business Information Systems

9.2. Technical References
Laravel Documentation: https://laravel.com/docs

Bootstrap 5 Documentation: https://getbootstrap.com/docs/5.0/

ThemeWagon - Nova Template: https://themewagon.com/themes/nova-bootstrap5_beta1/

MySQL Documentation: https://dev.mysql.com/doc/

9.3. Tools & Resources
IDE: VS Code

Version Control: Git

Local Server: Laravel Sail / XAMPP

Design Tools: Figma (for wireframes)

Documentation: Markdown

10. KESIMPULAN
Proyek UTS PEMWEB ini berhasil mengimplementasikan:

Konsep SLR ke dalam aplikasi web nyata

BRD requirements ke dalam sistem yang functional

Database design dengan 6 tabel utama

Frontend implementation dengan template modern

Full-stack development dengan Laravel

Website ini siap digunakan sebagai platform perusahaan outsourcing Data Science dengan fitur lengkap untuk lead generation, service showcasing, dan client management.
