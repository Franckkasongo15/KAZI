<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'profession',
        'villeNaissance',
        'dateNaissance',
        'adresse',
        'email',
        'telephone',  
    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
