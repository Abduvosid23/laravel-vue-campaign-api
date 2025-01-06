<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Campaign\Controllers\GetCampaignController;




Route::get('/campaigns', [GetCampaignController::class, 'getCampaigns']);
