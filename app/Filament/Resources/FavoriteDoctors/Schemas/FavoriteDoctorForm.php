<?php

namespace App\Filament\Resources\FavoriteDoctors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FavoriteDoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('doctor_id')
                    ->required()
                    ->numeric(),
                TextInput::make('patient_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
