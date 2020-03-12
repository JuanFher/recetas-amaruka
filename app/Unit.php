<?php

namespace App;

use App\Medicine;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name', 'simbol'
    ];


    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
