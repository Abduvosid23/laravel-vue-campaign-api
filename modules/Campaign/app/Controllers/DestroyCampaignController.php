<?php

namespace Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use Modules\Campaign\Models\Campaign;

class DestroyCampaignController extends Controller
{
    public function destroy($id)
    {
        $campaign = Campaign::find($id)->first();

        $campaign->delete();

        return response()->json([
            'success' => true,
            'message' => 'Campaign deleted successfully!',
        ], 200);
    }
}
