<?php

namespace App\Services\AI\Contracts;

use App\Models\Board;

interface OpponentStrategy
{
    // Recebe o tabuleiro do jogador humano para decidir onde atirar
    public function chooseTarget(Board $playerBoard): array; // Retorna ['x' => 1, 'y' => 2]
}