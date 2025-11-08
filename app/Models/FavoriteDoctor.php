<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteDoctor extends Model
{
    //
    protected $table = "favorite_doctors";

    protected $fillable = [
        'doctor_id',
        'patient_id',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
