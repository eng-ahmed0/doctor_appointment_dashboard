<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //

    protected $fillable = [
        'day_name',
        'short_name',
        'day_number',
    ];

    public function doctorSchedules()
    {
        return $this->hasMany(DoctorSchedule::class);
    }
}
