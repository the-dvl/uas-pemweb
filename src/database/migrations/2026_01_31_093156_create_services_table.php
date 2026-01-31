<?php
// src/database/migrations/2026_01_31_093156_create_services_table.php

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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_code')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->longText('full_description');
            $table->string('icon_class')->nullable(); // Bootstrap/FontAwesome class
            $table->string('icon_url')->nullable();
            $table->enum('category', ['analytics', 'engineering', 'visualization', 'consulting', 'training']);
            $table->json('features')->nullable(); // Array of features included
            $table->json('technologies')->nullable(); // Technologies used
            $table->json('deliverables')->nullable(); // What client receives
            $table->integer('duration_days')->nullable(); // Estimated project duration
            $table->decimal('starting_price', 12, 2)->nullable();
            $table->string('price_unit')->nullable(); // project/hour/month
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('display_order')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index(['category', 'is_active']);
            $table->index(['is_popular', 'display_order']);
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
