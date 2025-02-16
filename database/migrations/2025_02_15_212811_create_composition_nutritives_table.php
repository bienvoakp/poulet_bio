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
        Schema::create('composition_nutritives', function (Blueprint $table) {
            $table->id();
            $table->string('proportion');
            $table->foreignId('nutriment_id')->constrained('nutriments');
            $table->foreignId('niveau_maturite_id')->constrained('niveau_maturites');
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
        Schema::dropIfExists('composition_nutritives');
    }
};
