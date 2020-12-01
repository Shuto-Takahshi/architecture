<?php

namespace Tests\Feature;

use App\Photo;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PhotoTest extends TestCase
{
    use RefreshDatabase;

    public function testIsLikedByNull()
    {
        $photo = factory(Photo::class)->create();

        $result = $photo->isLikedBy(null);

        $this->assertFalse($result);
    }

    public function testIsLikedByTheUser()
    {
        $photo = factory(Photo::class)->create();
        $user = factory(User::class)->create();
        $photo->likes()->attach($user);

        $result = $photo->isLikedBy($user);

        $this->assertTrue($result);
    }

    public function testIsLikedByAnother()
    {
        $photo = factory(Photo::class)->create();
        $user = factory(User::class)->create();
        $another = factory(User::class)->create();
        $photo->likes()->attach($another);

        $result = $photo->isLikedBy($user);

        $this->assertFalse($result);
    }
}
