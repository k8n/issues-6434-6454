<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TeamUser extends Pivot
{
    public function team(): BelongsTo {
        return $this->belongsTo(Team::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
