<?php

namespace App\Models;

use App\Models\User;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateDebutLocation',
        'dateFinLocation',
        'user_id',
        'voiture_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function voiture()
    {
        return $this->hasOne(Voiture::class);
    }
}
