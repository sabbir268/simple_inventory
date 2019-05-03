<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSupplyingTest()
    {
        $this->actingAs(factory('App\Supplying')->create());
        // $this->post([

        // ]);
        $this->assertTrue(true);
    }
}
