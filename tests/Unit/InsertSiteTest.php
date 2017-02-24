<?php

namespace Tests\Unit;

use App\Site;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InsertSiteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {

        $site['url'] = 'ts_1231232312.com';
        $site['hosted_server'] = 'randomtestasdasd 2';
        $site['state'] = 'randomtestasdasd 2';
        $site['created_date'] = date('y-m-d');
        $site['last_updated_date'] = date('y-m-d');
        $site['active_from'] = date('y-m-d');
        $site['active_to'] = date('y-m-d');

        //var_dump(json_encode(['site' => $site]));

        $response = $this->json('POST', '/api/v1/site', ['site' => $site]);

        $this->assertEquals(200, $response->getStatusCode());
        //var_dump($response->getContent());
        $datas = json_decode($response->getContent(), true);
        $data_x = (array) $datas;
        //var_dump($data_x);
        foreach ($datas as $value) {
            //print_r($values);
            $this->assertEquals('ts_1231232312.com', $value['url']);
            $this->assertArrayHasKey('id', $value);
            $this->assertArrayHasKey('hosted_server', $value);
            $this->assertArrayHasKey('state', $value);
            $this->assertArrayHasKey('created_date', $value);
            $this->assertArrayHasKey('last_updated_date', $value);
            $this->assertArrayHasKey('active_from', $value);
            $this->assertArrayHasKey('active_to', $value);

        }


    }
}
