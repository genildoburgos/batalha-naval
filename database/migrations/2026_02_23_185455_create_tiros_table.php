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
        Schema::create('tiros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tabuleiro_id')->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('x');
            $table->unsignedTinyInteger('y');
            $table->boolean('foi_atingido')->default(false);
            $table->boolean('navio_afundado')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiros');
    }
};
