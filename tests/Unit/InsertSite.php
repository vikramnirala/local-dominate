<?php

namespace Tests\Unit;

use Tests\TestCase;
use APP\Site;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InsertSite extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {

        $data['url'] = 'unittest.com';
        $data['hosted_server'] = 'unittest';
        $data['state'] = 'unit';
        $data['created_date'] = '2017-01-01';
        $data['last_updated_date'] = '2017-01-01';
        $data['active_from'] = '2017-01-01';
        $data['active_to'] = '2017-01-01';

        $new_site = new Site();
        $new_site->createSite($data);

        $this->assertTrue(true);
    }
}
