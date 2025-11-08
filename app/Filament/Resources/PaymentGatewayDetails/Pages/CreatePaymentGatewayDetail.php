<?php

namespace App\Filament\Resources\PaymentGatewayDetails\Pages;

use App\Filament\Resources\PaymentGatewayDetails\PaymentGatewayDetailResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentGatewayDetail extends CreateRecord
{
    protected static string $resource = PaymentGatewayDetailResource::class;
}
