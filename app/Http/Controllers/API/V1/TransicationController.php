<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransicationController extends Controller
{
      public function createTranscation(Request $request)
    {
        $validate_date=$request->validate([
            'amount' => 'required|decimal:2',
            'payment_gateway_detail_id' => 'required|exists:payment_gateway_details,id',
        ]);

        $transication = Transaction::create($validate_date);

        return response()->json([
            'message' => 'transcation created successfully',
            'data' => $transication
        ],201);
    }
    public function deleteTranscation($id)
    {
        $transcation=Transaction::find($id);
        if(!$transcation)
        {
            return response()->json([
                'message'=>'transcation not found !'
            
            ],404);
        }
        $transcation->delete();
        return response()->json([
                'message'=>'transcation deleted successfully !'
            
            ],404);
    }
}
