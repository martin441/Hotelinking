<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class UserTest extends TestCase
{
    public function test_register()
    {
    
        Artisan::call("migrate");

        //El formulario carga
        $carga = $this->get(route("register"));
        $carga->assertStatus(200)->assertSee("Register");
        
    }
}
