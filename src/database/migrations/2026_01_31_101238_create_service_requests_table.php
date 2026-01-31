<?php
// src/database/migrations/2026_01_31_101238_create_service_requests_table.php

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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('request_code')->unique(); // Format: SR-YYYYMMDD-XXXX
            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->text('project_description');
            $table->json('requirements')->nullable(); // Specific requirements
            $table->json('data_sources')->nullable(); // Where data comes from
            $table->string('industry')->nullable(); // Client's industry
            $table->integer('company_size')->nullable(); // Number of employees
            $table->enum('priority', ['low', 'medium', 'high', 'urgent'])->default('medium');
            $table->enum('status', ['draft', 'submitted', 'reviewing', 'quoted', 'negotiation', 'accepted', 'rejected', 'cancelled'])->default('draft');
            $table->decimal('estimated_budget', 12, 2)->nullable();
            $table->decimal('quoted_price', 12, 2)->nullable();
            $table->date('desired_start_date')->nullable();
            $table->date('desired_end_date')->nullable();
            $table->json('attachments')->nullable(); // Project brief, sample data, etc.
            $table->foreignId('assigned_sales_rep')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('assigned_data_scientist')->nullable()->constrained('users')->onDelete('set null');
            $table->text('internal_notes')->nullable();
            $table->text('client_notes')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('quoted_at')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('request_code');
            $table->index(['status', 'priority']);
            $table->index(['contact_id', 'service_id']);
            $table->index(['assigned_sales_rep', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
