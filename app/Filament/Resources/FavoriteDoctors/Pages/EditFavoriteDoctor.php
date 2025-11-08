<?php

namespace App\Filament\Resources\FavoriteDoctors\Pages;

use App\Filament\Resources\FavoriteDoctors\FavoriteDoctorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFavoriteDoctor extends EditRecord
{
    protected static string $resource = FavoriteDoctorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
