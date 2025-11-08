<?php

namespace App\Filament\Resources\BookAppointments\Pages;

use App\Filament\Resources\BookAppointments\BookAppointmentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBookAppointment extends CreateRecord
{
    protected static string $resource = BookAppointmentResource::class;
}
