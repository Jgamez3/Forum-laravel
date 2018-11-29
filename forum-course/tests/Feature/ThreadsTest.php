<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabasesMigrations;

class ThreadsTest extends TestCase
{
    use DatabasesMigrations; 
    /**
     * A basic test example.
     *
     * @test
     */
    public function a_user_can_browse_threads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
