<?php

namespace App\Filament\Resources\BookAppointments\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BookAppointmentForm
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

                Select::make('patient_id')
                    ->label('Patient')
                    ->relationship('patient', 'name')
                    ->required()
                    ->columnSpan(2),

                Select::make('doctor_schedule_id')
                    ->label('Schedule')
                    ->relationship('schedule', 'id') // لاحقًا يمكن عرض اليوم والوقت
                    ->required()
                    ->columnSpan(2),

                DatePicker::make('date')
                    ->label('Appointment Date')
                    ->required()
                    ->columnSpan(2),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'canceled' => 'Canceled',
                    ])
                    ->default('pending')
                    ->required()
                    ->columnSpan(1),

                Toggle::make('is_completed')
                    ->label('Completed')
                    ->columnSpan(1),

                TextInput::make('payment_mode')
                    ->label('Payment Mode')
                    ->columnSpan(1),

                Select::make('transaction_id')
                    ->label('Transaction')
                    ->relationship('transaction', 'id')
                    ->columnSpan(1),
            ]);
    }
}
