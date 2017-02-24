<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Site;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AllSiteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $dom_site = new Site();

        $sites = $dom_site->getAllSites();

        foreach ($sites as $site) {
            echo $site->url.'<br>';
        }

        $this->assertTrue(true, 'All sites get.');
    }
}
