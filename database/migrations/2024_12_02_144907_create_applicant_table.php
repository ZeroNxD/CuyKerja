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
        Schema::create('applicant', function (Blueprint $table) {
            $table->id();
            $table->foreignId("job_id")->constrained('hirejobs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId("jobseeker_id")->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('application_status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('cover_letter')->nullable();
            $table->string('resume_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant');
    }
};
