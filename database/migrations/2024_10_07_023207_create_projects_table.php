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
            $table->string('project_name');
            // sector from sector
            $table->unsignedBigInteger('sector_id');
            $table->string('subdistric_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->string('project_image');
            $table->boolean('state')->default(0); // 0 for draft, 1 for terbit
            $table->foreign('sector_id')->on('sectors')->references('id');
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
