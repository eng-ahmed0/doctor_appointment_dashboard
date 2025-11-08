<?php

namespace App\Filament\Resources\FavoriteDoctors\Pages;

use App\Filament\Resources\FavoriteDoctors\FavoriteDoctorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFavoriteDoctor extends CreateRecord
{
    protected static string $resource = FavoriteDoctorResource::class;
}
