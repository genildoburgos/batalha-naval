<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tabuleiro extends Model
{
    protected $fillable = ['partida_id', 'user_id', 'tabuleiro_grid'];
    protected $casts = ['tabuleiro_grid' => 'array'];

    public function partida()
    {
        return $this->belongsTo(Partida::class);
    }

    public function tiros()
    {
        return $this->hasMany(Tiro::class);
    }

    // Método auxiliar usado pela HunterStrategy
    public function atirouEm($x, $y)
    {
        return $this->tiros()->where('x', $x)->where('y', $y)->exists();
    }

    public function foiAguaOuAfundado(int $x, int $y): bool
    {
        $tiro = $this->tiros()->where('x', $x)->where('y', $y)->first();
        
        if (!$tiro) {
            return false;
        }

        return !$tiro->foi_atingido || $tiro->navio_afundado;
    }
}
