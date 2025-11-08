<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
    protected $table = 'book_appointments';

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'doctor_schedule_id',
        'date',
        'status',
        'is_completed',
        'payment_mode',
        'transaction_id',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
        'date' => 'date',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function schedule()
    {
        return $this->belongsTo(DoctorSchedule::class, 'doctor_schedule_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id')->withDefault();
    }

    public function paymentGatewayDetail()
{
    return $this->hasOne(BookAppointment::class, 'transaction_id', 'id');
}

}
