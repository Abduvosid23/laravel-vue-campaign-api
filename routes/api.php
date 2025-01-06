<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Campaign\Controllers\GetCampaignController;
use Modules\Campaign\Controllers\UpdateCampaignController;
use Modules\Campaign\Controllers\StoreCampaignController;
use Modules\Campaign\Controllers\DestroyCampaignController;




Route::get('/campaigns', [GetCampaignController::class, 'getCampaigns']);
Route::post('/campaign/store', [StoreCampaignController::class, 'storeCampaign']);
Route::put('/campaign/update/{id}', [UpdateCampaignController::class, 'updateCampaign']);
Route::delete('/campaign/{id}', [DestroyCampaignController::class, 'destroy']);
