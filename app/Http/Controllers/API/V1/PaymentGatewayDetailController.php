<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\PaymentGatewayDetail;
use Illuminate\Http\Request;

class PaymentGatewayDetailController extends Controller
{
    public function createGatway(Request $request)
{
    $validated = $request->validate([
        'gateway_name' => 'required|string|max:255',
        'api_key'      => 'required|string',
        'api_secret'   => 'required|string',
        'is_active'    => 'boolean',
        'logo'         => 'nullable|string',
    ]);

    $paymentGateway = PaymentGatewayDetail::create($validated);

    return response()->json([
        'message' => 'Payment gateway created successfully',
        'data'    => $paymentGateway
    ], 201);
}
public function deleteGatway($id)
{
    $gateway = PaymentGatewayDetail::find($id);
    if (!$gateway) {
        return response()->json([
            'message' => 'Payment gateway not found'
        ], 404);
    }

    $gateway->delete();

    return response()->json([
        'message' => 'Payment gateway deleted successfully'
    ], 200);
}


}
