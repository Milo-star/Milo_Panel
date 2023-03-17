<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client',
        'description',
        'prix',
        'status',
        'adresse',
        'site',
        'modele',
        'date',
        'moyen_paiement'
    ];
}
