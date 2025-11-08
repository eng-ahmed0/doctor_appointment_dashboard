<?php

namespace App\Filament\Resources\DoctorDaysOffs\Pages;

use App\Filament\Resources\DoctorDaysOffs\DoctorDaysOffResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDoctorDaysOff extends EditRecord
{
    protected static string $resource = DoctorDaysOffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
