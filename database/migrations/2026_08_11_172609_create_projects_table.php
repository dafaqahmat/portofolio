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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            
            $table->string('title_id');
            $table->string('title_en');
            $table->string('title_ar');
            
            $table->string('slug_id')->unique();
            $table->string('slug_en')->unique();
            $table->string('slug_ar')->unique();
            
            $table->text('description_id');
            $table->text('description_en');
            $table->text('description_ar');
            
            $table->json('tech_stack')->nullable();
            $table->json('images')->nullable();
            $table->string('link_demo')->nullable();
            $table->string('link_repo')->nullable();
            $table->string('category')->default('other');
            
            $table->integer('order')->default(0);
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);
            
            $table->timestamps();
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
