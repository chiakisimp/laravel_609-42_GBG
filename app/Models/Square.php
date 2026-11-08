<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Square extends Model
{
    use HasFactory;
    public function outgoingMoves(): HasMany
    {
        return $this->hasMany(Move::class, 'src_square_id');
    }

    public function incomingMoves(): HasMany
    {
        return $this->hasMany(Move::class, 'dst_square_id');
    }
}
