<?php

namespace App;

use App\Patient;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'user_id', 'type_document', 'document', 'address', 'phone', 'home_phone', 'title',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
