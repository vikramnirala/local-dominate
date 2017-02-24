<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Site;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GetSiteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $id = 101;

        $response = $this->json('GET', '/api/v1/site/'.$id);

        $this->assertEquals(404, $response->getStatusCode());
    }
}
