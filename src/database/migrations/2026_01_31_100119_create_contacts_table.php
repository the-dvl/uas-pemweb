<?php
// src/database/migrations/2026_01_31_100119_create_contacts_table.php

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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->enum('subject', ['general', 'sales', 'support', 'partnership', 'career', 'other']);
            $table->text('message');
            $table->json('interests')->nullable(); // Services they're interested in
            $table->enum('budget_range', ['<10jt', '10-50jt', '50-200jt', '>200jt', 'not_sure'])->nullable();
            $table->enum('project_timeline', ['urgent', '1_month', '3_months', '6_months', 'not_sure'])->nullable();
            $table->enum('status', ['new', 'read', 'replied', 'in_progress', 'closed', 'spam'])->default('new');
            $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null');
            $table->text('admin_notes')->nullable();
            $table->json('attachments')->nullable(); // File attachments info
            $table->ipAddress('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamp('replied_at')->nullable();
            $table->timestamps();
            
            $table->index(['status', 'created_at']);
            $table->index(['email', 'subject']);
            $table->index('assigned_to');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
