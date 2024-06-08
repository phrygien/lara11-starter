<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Annee extends Model
{
    use HasFactory;

    protected $table = 'annees';

    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'school_id',
        'is_active'
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }
}
