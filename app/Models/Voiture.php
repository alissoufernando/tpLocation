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
        'plaque',
        'model',
        'couleur',
        'prix',
       
        'pathImage'
    ];

    public function getPrix()
    {
        $prix = $this->prix / 100;
        return number_format($prix, 2, ', ',''). '€';
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

}
