<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\present_job;
use App\Models\tag;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('jobs_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(present_job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_tags');
    }
};
