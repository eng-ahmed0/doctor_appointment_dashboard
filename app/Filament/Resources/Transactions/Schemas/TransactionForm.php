<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('amount')
                    ->required()
                    ->numeric()
                    ->default(0),

                Select::make('payment_gateway_detail_id')
                    ->label('Payment Gateway')
                    ->relationship('paymentGatewayDetail', 'gateway_name')
                    ->searchable()
                    ->required(),
            ]);
    }
}
