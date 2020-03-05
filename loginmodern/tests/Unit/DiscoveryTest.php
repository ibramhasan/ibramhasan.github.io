<?php

namespace Tests\Unit;

use App\Http\Controllers\HomeController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DiscoveryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testDiscovery(){
        $data = new HomeController();
        $this->assertTrue(true);
    }
}
