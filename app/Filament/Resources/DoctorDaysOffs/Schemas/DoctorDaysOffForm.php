<?php

namespace App\Filament\Resources\DoctorDaysOffs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DoctorDaysOffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('doctor_id')
                    ->label('Doctor')
                    ->relationship('doctor', 'name') // يعرض أسماء الأطباء
                    ->required()
                    ->columnSpan(2),

                Select::make('day_id')
                    ->label('Day')
                    ->relationship('day', 'name') // يعرض أسماء الأيام
                    ->required()
                    ->columnSpan(2),
            ]);
    }
}
