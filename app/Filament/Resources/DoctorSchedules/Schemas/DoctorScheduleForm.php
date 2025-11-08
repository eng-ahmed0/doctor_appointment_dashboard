<?php

namespace App\Filament\Resources\DoctorSchedules\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class DoctorScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('doctor_id')
                    ->label('Doctor')
                    ->relationship('doctor', 'name') 
                    ->required()
                    ->columnSpan(2),

                Select::make('day_id')
                    ->label('Day')
                    ->relationship('day', 'day_name') 
                    ->required()
                    ->columnSpan(2),

                TimePicker::make('start_time')
                    ->label('Start Time')
                    ->required()
                    ->columnSpan(1),

                TimePicker::make('end_time')
                    ->label('End Time')
                    ->required()
                    ->columnSpan(1),
            ]);
    }
}
