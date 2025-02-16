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
        Schema::create('genarel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('website_url');
            $table->string('author');
            $table->string('address');
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('site_logo');
            $table->string('socail_link_fb');
            $table->string('social_link_youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genarel_settings');
    }
};
