<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    protected $fillable = [
        'name',
        'email',
        'aboutus',
        'days_off',
        'address',
        'phone',
        'location_id',
        'specialty_id',
        'department_id',
        'gender',
        'is_featured',
        'profile_image',
        'birth_day',
        'services',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function schedules()
    {
        return $this->hasMany(DoctorSchedule::class);
    }

    public function appointments()
    {
        return $this->hasMany(BookAppointment::class);
    }

    public function daysOff()
    {
        return $this->hasMany(DoctorDaysOff::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
