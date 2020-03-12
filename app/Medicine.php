<?php

namespace App;

use App\Laboratory;
use App\Unit;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'name', 'description', 'unit_id', 'laboratory_id', 'container', 'compound'
    ];

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
