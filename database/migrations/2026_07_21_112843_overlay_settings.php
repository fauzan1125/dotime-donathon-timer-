<?php

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
        // database/migrations/xxxx_xx_xx_create_overlay_settings_table.php
    Schema::create('overlay_settings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    
    // URL Overlay Mentah
    $table->text('saweria_overlay_url')->nullable();
    $table->text('sociabuzz_overlay_url')->nullable();
    $table->text('agency_tiktok_chat_url')->nullable(); // Untuk link chat TikTok Indofinity
    $table->text('youtube_chat_url')->nullable();
    
    // Kustomisasi Tampilan
    $table->integer('alert_duration')->default(5); // Durasi per alert (detik)
    $table->boolean('enable_eco_mode')->default(true); // Fitur penghemat RAM
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
