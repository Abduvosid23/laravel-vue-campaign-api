<?php

namespace Tests\Modules\Campaign\Models;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Modules\Campaign\Models\Campaign;
use Tests\TestCase;

class CampaignTest extends TestCase
{
    use DatabaseMigrations;
    public function testCreateCampaign(){
//        $campaign = new Campaign();
        $campaign = Campaign::factory()->create();
        $this->assertTrue(true);
    }
}
