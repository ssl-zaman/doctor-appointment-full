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
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_title')->nullable();
            $table->string('phone')->nullable();
            $table->string('hotline')->nullable();
            $table->string('whats_app')->nullable();
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_fav_icon')->nullable();
            $table->string('admin_fav_icon')->nullable();
            $table->string('website_link')->nullable();
            $table->string('google_tag')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkdin_link')->nullable();
            $table->string('x_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->text('about')->nullable();
            $table->string('footer_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
