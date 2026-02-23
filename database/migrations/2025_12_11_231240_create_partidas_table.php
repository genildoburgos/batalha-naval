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
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->enum('modo', ['pve', 'pvp'])->default('pve');
            $table->enum('dificuldade', ['facil', 'medio', 'dificil']);
            $table->unsignedTinyInteger('board_width')->default(10);
            $table->unsignedTinyInteger('board_height')->default(10);
            $table->enum('status', ['aguardando', 'posicionamento', 'em_andamento', 'finalizada'])->default('aguardando');

            $table->foreignId('criado_por')->constrained('users')->cascadeOnDelete();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidas');
    }
};
