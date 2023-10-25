<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
    'nom_prod',
    'categorie_id',
    'prix',
    'stock',
    'description',
    'image'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
