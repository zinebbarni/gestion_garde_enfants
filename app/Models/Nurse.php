<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'date_naissance',
        'email',

    ];

    public function service(): HasMany
    {
        return $this->hasMany(Service::class,'id');
    }

    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class,'id');
    }
}
