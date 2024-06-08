<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = "schools";

    protected $fillable = [
        'name',
        'identity',
        'phone_fixe',
        'phone_mobile',
        'email',
        'province_id',
        'region_id',
        'district_id',
        'commune_id',
        'adresse',
        'notes',
        'is_active',
        'user_id',
        'type',
        'logo',
    ];
}
