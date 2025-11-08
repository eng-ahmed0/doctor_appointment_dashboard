<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = [
        'lat',
        'lng',
        'name',
    ];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function patients(){
        return $this->hasMany(Patient::class);
    }
}
