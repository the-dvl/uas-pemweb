<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\DatasetController;
use App\Http\Controllers\Api\AnalysisController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| Data Science Platform API Routes
|--------------------------------------------------------------------------
| API ini digunakan untuk platform layanan outsourcing Data Science
| termasuk manajemen klien, proyek, dataset, analisis, dan dashboard
*/

// ===== AUTHENTICATION =====
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/auth/refresh', [AuthController::class, 'refresh'])->middleware('auth:sanctum');

// ===== CLIENT MANAGEMENT =====
Route::get('/clients', [ClientController::class, 'index'])->middleware('auth:sanctum');
Route::get('/clients/{client}', [ClientController::class, 'show'])->middleware('auth:sanctum');
Route::post('/clients', [ClientController::class, 'store'])->middleware('auth:sanctum');
Route::put('/clients/{client}', [ClientController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->middleware('auth:sanctum');

// ===== PROJECT MANAGEMENT =====
Route::get('/projects', [ProjectController::class, 'index'])->middleware('auth:sanctum');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->middleware('auth:sanctum');
Route::post('/projects', [ProjectController::class, 'store'])->middleware('auth:sanctum');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->middleware('auth:sanctum');
Route::post('/projects/{project}/assign-data-scientist', [ProjectController::class, 'assignDataScientist'])->middleware('auth:sanctum');
Route::get('/projects/{project}/timeline', [ProjectController::class, 'getTimeline'])->middleware('auth:sanctum');

// ===== DATASET MANAGEMENT =====
Route::get('/datasets', [DatasetController::class, 'index'])->middleware('auth:sanctum');
Route::get('/datasets/{dataset}', [DatasetController::class, 'show'])->middleware('auth:sanctum');
Route::post('/datasets/upload', [DatasetController::class, 'upload'])->middleware('auth:sanctum');
Route::post('/datasets/{dataset}/preprocess', [DatasetController::class, 'preprocess'])->middleware('auth:sanctum');
Route::delete('/datasets/{dataset}', [DatasetController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('/datasets/{dataset}/stats', [DatasetController::class, 'getStatistics'])->middleware('auth:sanctum');

// ===== DATA ANALYSIS =====
Route::get('/analyses', [AnalysisController::class, 'index'])->middleware('auth:sanctum');
Route::get('/analyses/{analysis}', [AnalysisController::class, 'show'])->middleware('auth:sanctum');
Route::post('/analyses', [AnalysisController::class, 'store'])->middleware('auth:sanctum');
Route::put('/analyses/{analysis}', [AnalysisController::class, 'update'])->middleware('auth:sanctum');
Route::post('/analyses/{analysis}/run', [AnalysisController::class, 'runAnalysis'])->middleware('auth:sanctum');
Route::post('/analyses/{analysis}/predict', [AnalysisController::class, 'makePrediction'])->middleware('auth:sanctum');
Route::get('/analyses/{analysis}/results', [AnalysisController::class, 'getResults'])->middleware('auth:sanctum');

// ===== DASHBOARD =====
Route::get('/dashboards', [DashboardController::class, 'index'])->middleware('auth:sanctum');
Route::get('/dashboards/{dashboard}', [DashboardController::class, 'show'])->middleware('auth:sanctum');
Route::post('/dashboards', [DashboardController::class, 'store'])->middleware('auth:sanctum');
Route::put('/dashboards/{dashboard}', [DashboardController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/dashboards/{dashboard}', [DashboardController::class, 'destroy'])->middleware('auth:sanctum');
Route::get('/dashboards/{dashboard}/widgets', [DashboardController::class, 'getWidgets'])->middleware('auth:sanctum');
Route::post('/dashboards/{dashboard}/add-widget', [DashboardController::class, 'addWidget'])->middleware('auth:sanctum');

// ===== REPORTS =====
Route::get('/reports', [ReportController::class, 'index'])->middleware('auth:sanctum');
Route::get('/reports/{report}', [ReportController::class, 'show'])->middleware('auth:sanctum');
Route::post('/reports', [ReportController::class, 'store'])->middleware('auth:sanctum');
Route::post('/reports/{report}/generate', [ReportController::class, 'generate'])->middleware('auth:sanctum');
Route::get('/reports/{report}/download/{format}', [ReportController::class, 'download'])->middleware('auth:sanctum');

// ===== ANALYTICS METRICS =====
Route::get('/analytics/platform-stats', function () {
    return response()->json([
        'status' => 'success',
        'data' => [
            'active_projects' => 15,
            'total_clients' => 42,
            'data_processed_gb' => 256.7,
            'models_trained' => 89,
            'api_requests_today' => 1245
        ]
    ]);
})->middleware('auth:sanctum');

// ===== PUBLIC ENDPOINTS (untuk demo/promosi) =====
Route::get('/public/demo-dashboard', [DashboardController::class, 'publicDemo']);
Route::post('/public/contact', [ClientController::class, 'contactInquiry']);

// ===== HEALTH CHECK =====
Route::get('/health', function () {
    return response()->json([
        'status' => 'healthy',
        'service' => 'Data Science Platform API',
        'version' => '1.0.0',
        'timestamp' => now()->toISOString(),
        'uptime' => exec('uptime -p')
    ]);
});

// ===== API TEST =====
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Data Science Platform API is running',
        'endpoints' => [
            'authentication' => '/api/auth/*',
            'clients' => '/api/clients',
            'projects' => '/api/projects',
            'datasets' => '/api/datasets',
            'analyses' => '/api/analyses',
            'dashboards' => '/api/dashboards',
            'reports' => '/api/reports'
        ],
        'documentation' => '/api/docs'
    ]);
});
