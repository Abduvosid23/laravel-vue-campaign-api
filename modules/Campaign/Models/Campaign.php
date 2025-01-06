<?php

namespace Modules\Campaign\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Campaign\Database\Factories\CampaignFactory;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'companyName',
        'brandName',
        'type',
        'product',
        'price',
        'quantity',
        'totalCalculation',
        'country',
        'age',
        'gender',
        'description',
    ];
    protected static function newFactory():CampaignFactory
    {
        return CampaignFactory::new();
    }
}
