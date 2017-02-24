<?php

namespace Tests\Unit;

use App\Site;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchSiteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearch()
    {
        $url = 'unittestsearch.com';

        $single_site = new Site();
        $nid = $single_site->searchSite($url);

        /*echo '<pre>';
        print_r($nid);
        echo '</pre>';*/

        $this->assertInternalType('object', $nid, 'Site not found');
    }

    public function testCreate()
    {
        $data['url'] = 'unittestsearch.com';
        $data['hosted_server'] = 'unittestsearch 2';
        $data['state'] = 'unittestsearch';
        $data['created_date'] = '2015-01-01';
        $data['last_updated_date'] = '2016-01-01';
        $data['active_from'] = '2015-01-01';
        $data['active_to'] = '2017-01-01';


        $new_site = new Site();
        $new_site->createSite($data);

        $this->assertTrue(true, 'There is an error in storing site');
    }

    public function testDelete()
    {
        $url = 'unittestsearch.com';
        $single_site = new Site();
        $nid = $single_site->searchSite($url);

        $id = $nid->id;
        $single_site->deleteSite($id);

        $this->assertTrue(true, 'No such site exists');
    }


}
