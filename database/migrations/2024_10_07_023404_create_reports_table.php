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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('title_report');
            // foreign key sektor
            // foreign key project
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('project_id');
            $table->date('send_at');
            $table->decimal('realization');
            $table->text('description');
            $table->string('project_image');
            $table->string('state_report')->default('Draft'); // Draft, Revisi, Diterima
            $table->foreign('sector_id')->on('sectors')->references('id');
            $table->foreign('project_id')->on('projects')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
