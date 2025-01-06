<?php

namespace Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Campaign\Models\Campaign;
use Illuminate\Support\Facades\Validator;

class StoreCampaignController extends Controller
{
    /**
     * Store a new campaign.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeCampaign(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'companyName' => 'required|string|max:255',
            'brandName' => 'required|string|max:255',
            'type' => 'required|string',
            'product' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'totalCalculation' => 'required|numeric|min:0',
            'country' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'gender' => 'required|string|in:male,female,other',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }
        $request = $request->campaign;
        $campaign = Campaign::create([
            'user_id'          => $request['user_id'],
            'companyName'      => $request['companyName'],
            'brandName'        => $request['brandName'],
            'type'             => $request['type'],
            'product'          => $request['product'],
            'price'            => $request['price'],
            'quantity'         => $request['quantity'],
            'totalCalculation'=> $request['totalCalculation'],
            'country'          => $request['country'],
            'age'              => $request['age'],
            'gender'           => $request['gender'],
            'description'      => $request['description'],
        ]);


        return response()->json([
            'success' => true,
            'message' => 'Campaign created successfully!',
            'data' => $campaign,
        ], 201);
    }
}
