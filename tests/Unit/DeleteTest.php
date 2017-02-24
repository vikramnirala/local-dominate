<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Site;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $id = 5;

        $new_site = new Site();
        $new_site->deleteSite($id);

        $this->assertTrue(true);
    }
}
