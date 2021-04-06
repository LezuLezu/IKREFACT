<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animal';

    public function speciesModel(){
        return $this->belongsTo('\App\Models\KindOfAnimal', 'species', 'species');
    }
}
