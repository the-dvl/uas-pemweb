<?php
// main/src/database/migrations/xxxx_xx_xx_xxxxxx_create_projects_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('project_code')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('project_type', ['eda', 'predictive', 'clustering', 'optimization', 'dashboard', 'custom']);
            $table->enum('status', ['draft', 'planning', 'data_collection', 'analysis', 'review', 'completed', 'archived'])->default('draft');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('budget', 12, 2)->nullable();
            $table->integer('estimated_hours')->nullable();
            $table->json('requirements')->nullable(); // JSON untuk menyimpan requirements spesifik
            $table->json('data_sources')->nullable(); // JSON untuk sumber data
            $table->string('deliverables')->nullable(); // Output yang diharapkan
            $table->foreignId('project_manager_id')->constrained('users')->nullable();
            $table->foreignId('lead_data_scientist_id')->constrained('users')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Index untuk performa query
            $table->index(['status', 'end_date']);
            $table->index('project_code');
            $table->index(['client_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
