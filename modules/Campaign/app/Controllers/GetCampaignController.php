<?php

namespace Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use Modules\Campaign\Models\Campaign;
use Illuminate\Http\Request;

class GetCampaignController extends Controller
{
    public function getCampaigns(Request $request)
    {
        $campaigns = Campaign::all();
        return response()->json($campaigns);
    }
}
