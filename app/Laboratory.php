<?php

namespace App;

use App\Medicine;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $fillable = [
        'name', 'description'
    ];


        public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
