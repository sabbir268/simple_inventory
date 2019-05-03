<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Products;
use App\Supplying;

class TestSupplying extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testProductsRecivePage()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $response = $this->get('/products-recive');
        $response->assertStatus(200);
    }

    public function testSuppliersPage()  
    {
        $user = User::find(2);
        $this->actingAs($user);
        $response = $this->get('/suppliers');
        $response->assertStatus(200);
    }

    public function testProductsReciveCreate()
    {
        $user = User::find(1);
        $this->actingAs($user);
        $products = Products::find(1);

        $supplying = Supplying::create([
            'user_id' => $user->id,
            'product_id' => $products->id,
            'quantity' => 10
        ]);
        $res = $supplying->quantity;
        //dd($response);
        $this->assertEquals($res , 10);
    }
}
