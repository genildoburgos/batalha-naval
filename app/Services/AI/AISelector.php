<?php

namespace App\Services\AI;

use App\Services\AI\Strategies\RandomStrategy;
use App\Services\AI\Strategies\HunterStrategy;
use App\Services\AI\Strategies\ProbabilisticStrategy;

/**
 * Serviço simples que seleciona a estratégia de IA com base na dificuldade do jogo.
 *
 */
class AISelector
{
    /**
     * Executa a jogada da IA e retorna as coordenadas escolhidas.
     *
     * @param mixed $game Objeto que contém `difficulty` e `playerBoard`.
     * @return array ['x' => int, 'y' => int]
     */
    public function playTurn($game): array
    {
        $difficulty = $game->difficulty ?? 'facil';

        $strategy = match ($difficulty) {
            'facil' => new RandomStrategy(),
            'medio' => new HunterStrategy(),
            'dificil' => new ProbabilisticStrategy(),
            default => new RandomStrategy(),
        };

        return $strategy->chooseTarget($game->playerBoard);
    }
}
