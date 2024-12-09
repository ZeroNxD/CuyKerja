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
        Schema::create('hirejobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained("users")->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('types_id')->constrained("jobtypes")->onUpdate('cascade')->onDelete('cascade');
            $table->string('Logo');
            $table->string('job_title');
            $table->text('job_description');
            $table->string('location');
            $table->integer('salary_min')->nullable();
            $table->integer('salary_max')->nullable();
            $table->text('requirements');
            $table->text('responsibilities');
            $table->foreignId("categories_id")->constrained("categories")->onUpdate('cascade')->onDelete('cascade');
            $table->string("status")->default("Open");
            $table->timestamp("posted_at")->useCurrent();
            $table->timestamp("deadline")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hirejobs');
    }
};
