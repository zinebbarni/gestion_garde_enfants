<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'titre',
        'description',
    ];

    public function nurse(): BelongsTo
    {
        return $this->belongsTo(Nurse::class,'nurse_id');
    }
}
