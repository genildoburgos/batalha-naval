<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tiro extends Model
{
    /**
     * atributos que podem ser preenchidos em massa
     *
     * @var array
     */
    protected $fillable = [
        'tabuleiro_id', 
        'x', 
        'y', 
        'foi_atingido', 
        'navio_afundado'
    ];

    /**
     * Obtém o tabuleiro ao qual o tiro pertence
     */
    public function tabuleiro(): BelongsTo
    {
        return $this->belongsTo(Tabuleiro::class);
    }
}

?>