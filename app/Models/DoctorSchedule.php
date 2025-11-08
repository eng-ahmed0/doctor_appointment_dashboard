<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    
    protected $table = 'doctor_schedules';

    protected $fillable = [
        'doctor_id',
        'day_id',
        'start_time',
        'end_time',
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function day() {
        return $this->belongsTo(Day::class);
    }
}
