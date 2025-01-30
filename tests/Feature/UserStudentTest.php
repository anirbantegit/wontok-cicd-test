<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserStudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_creation()
    {
        User::factory()->count(5)->create();
        $this->assertDatabaseCount('users', 5);
    }
}
