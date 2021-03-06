<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PhotoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get(route('photos.index'));

        $response->assertStatus(200)
            ->assertViewIs('photos.index');
    }

    public function testGuestCreate()
    {
        $response = $this->get(route('photos.create'));

        $response->assertRedirect(route('login'));
    }

    public function testAuthCreate()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('photos.create'));

        $response->assertStatus(200)
            ->assertViewIs('photos.create');
    }
}
