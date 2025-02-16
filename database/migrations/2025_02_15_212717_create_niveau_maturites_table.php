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
        Schema::create('niveau_maturites', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('poids_min');
            $table->string('poids_max');
            $table->integer('age_min');
            $table->integer('age_max');
            $table->string('energie_fourni');
            $table->timestamps();
            $table->foreignId('created_by_id')->nullable()->constrained('users');
            $table->foreignId('updated_by_id')->nullable()->constrained('users');
            $table->foreignId('deleted_by_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveau_maturites');
    }
};
