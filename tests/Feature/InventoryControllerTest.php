<?php

namespace Tests\Feature;

use App\Models\Inventory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InventoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_see_inventories()
    {
        $this->get('/inventories')
            ->assertStatus(200);
    }

    /** @test */
    public function can_create_new_inventory()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post('inventories/store')
            ->assertStatus(201);  
    }

    public function can_create_new_inventory_with_import()
    {
        $this->post('/inventories/store')
            ->assertStatus(201);
    }

    public function cant_create_new_inventory_if_no_auth()
    {
        
    }

    public function can_see_inventory()
    {
        
    }

    public function can_see_error_if_no_inventory()
    {
        
    }

    public function can_update_inventory()
    {
        
    }

    public function cant_update_inventory_if_no_auth()
    {
        
    }

    public function can_update_inventory_name()
    {
        
    }

    public function cant_update_inventory_name_if_no_auth()
    {
        
    }

    public function can_delete_inventory()
    {
        
    }

    public function cant_delete_inventory_if_no_auth()
    {
        
    }
}
