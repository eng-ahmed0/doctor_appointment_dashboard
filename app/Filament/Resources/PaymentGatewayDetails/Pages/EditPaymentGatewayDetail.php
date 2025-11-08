<?php

namespace App\Filament\Resources\PaymentGatewayDetails\Pages;

use App\Filament\Resources\PaymentGatewayDetails\PaymentGatewayDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPaymentGatewayDetail extends EditRecord
{
    protected static string $resource = PaymentGatewayDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
