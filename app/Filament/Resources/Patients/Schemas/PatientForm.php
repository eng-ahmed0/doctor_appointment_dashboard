<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->columnSpan(2),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required(),

                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->required(),

                TextInput::make('phone')
                    ->label('Phone')
                    ->tel()
                    ->required()
                    ->columnSpan(1),

                Select::make('gender')
                    ->label('Gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->required()
                    ->columnSpan(1),

                DatePicker::make('birth_day')
                    ->label('Birthday')
                    ->columnSpan(1),

                Select::make('location_id')
                    ->label('Location')
                    ->relationship('location', 'name')
                    ->required()
                    ->columnSpan(1),

                FileUpload::make('profile_image')
                    ->label('Profile Image')
                    ->image()
                    ->imagePreviewHeight(200)
                    ->imageCropAspectRatio('1:1')
                    ->imageResizeTargetHeight(200)
                    ->imageResizeTargetWidth(200)
                    ->columnSpanFull(),
            ]);
    }
}
