<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Site;
use App\Metadata;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $site['id'] = 55;
        $site['url'] = "ts_updated-url.com";

        $response = $this->json('PUT', '/api/v1/site/'.$site['id'], ['site' => $site]);

        $this->assertEquals(200, $response->getStatusCode());
        var_dump($response->getContent());
        $datas = json_decode($response->getContent(), true);
        $data_x = (array) $datas;
        //var_dump($data_x);
        /*foreach ($datas as $value) {
            $this->assertEquals('ts_1231232312.com', $value['url']);
            $this->assertArrayHasKey('id', $value);
            $this->assertArrayHasKey('hosted_server', $value);
            $this->assertArrayHasKey('state', $value);
            $this->assertArrayHasKey('created_date', $value);
            $this->assertArrayHasKey('last_updated_date', $value);
            $this->assertArrayHasKey('active_from', $value);
            $this->assertArrayHasKey('active_to', $value);

        }*/
    }
}
