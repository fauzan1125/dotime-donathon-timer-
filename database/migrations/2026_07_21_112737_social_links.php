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
        // database/migrations/xxxx_xx_xx_create_social_links_table.php
    Schema::create('social_links', function (Blueprint $table) {
    $table->id();
    $table->foreignId('profile_id')->constrained()->onDelete('cascade');
    $table->string('title'); // Contoh: "TikTok", "Saweria", "Instagram"
    $table->string('url');
    $table->string('icon')->nullable(); // Kode ikon/SVG (misal: "fab fa-tiktok")
    $table->integer('sort_order')->default(0); // Untuk drag-and-drop urutan link
    $table->boolean('is_visible')->default(true);
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
