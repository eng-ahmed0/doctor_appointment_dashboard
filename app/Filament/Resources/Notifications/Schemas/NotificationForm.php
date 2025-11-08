<?php

namespace App\Filament\Resources\Notifications\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NotificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->columnSpan(2),

                Textarea::make('message')
                    ->label('Message')
                    ->required()
                    ->columnSpanFull(),

                Select::make('patient_id')
                    ->label('Patient')
                    ->relationship('patient', 'name')
                    ->required()
                    ->columnSpan(2),
            ]);
    }
}
