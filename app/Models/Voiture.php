<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'couleur',
        'prix',
        'nbrRoue',
        'nbrPortiere',
        'nbrPlace',
        'pathImage'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
