<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Move extends Model
{
    use HasFactory;
    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Square::class, 'src_square_id');
    }

    public function dest(): BelongsTo
    {
        return $this->belongsTo(Square::class, 'dst_square_id');
    }
}
