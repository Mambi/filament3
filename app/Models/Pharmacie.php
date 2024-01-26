<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pharmacie extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'adresse', 'telephone', 'email'];

    /**
     * Get all of the Personnels for the Pharmacie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnels(): HasMany
    {
        return $this->hasMany(Personnel::class);
    }
}
