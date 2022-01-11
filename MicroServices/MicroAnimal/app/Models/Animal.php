<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animal';
    public $timestamps = false;

    public function speciesModel(){
        return $this->belongsTo('\App\Models\KindOfAnimal', 'species', 'species');
    }
    public function myOwner(){
        return $this->belongsTo(\App\Models\User::class, 'owner', 'id');
    }
}
