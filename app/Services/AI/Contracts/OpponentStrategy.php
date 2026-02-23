<?php

namespace App\Services\AI\Contracts;

use App\Models\Tabuleiro;

interface OpponentStrategy
{
    // Recebe o tabuleiro do jogador humano para decidir onde atirar
    public function chooseTarget(Tabuleiro $playerBoard): array; // Retorna ['x' => 1, 'y' => 2]
}