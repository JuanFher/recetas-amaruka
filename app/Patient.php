<?php

namespace App;

use App\Doctor;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'user_id', 'type_document', 'document', 'address', 'phone', 'home_phone',  'born'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
