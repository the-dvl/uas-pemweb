<?php
// src/database/migrations/2026_01_31_095151_create_features_table.php

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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('benefits')->nullable(); // Benefits for clients
            $table->string('icon_class')->nullable();
            $table->string('icon_url')->nullable();
            $table->enum('category', ['platform', 'analytics', 'security', 'collaboration', 'reporting']);
            $table->json('technical_details')->nullable();
            $table->json('use_cases')->nullable(); // Example use cases
            $table->integer('display_order')->default(0);
            $table->boolean('is_highlighted')->default(false);
            $table->boolean('is_active')->default(true);
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
            
            $table->index(['category', 'is_active']);
            $table->index(['is_highlighted', 'display_order']);
            $table->index('service_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
