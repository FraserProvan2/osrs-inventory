<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
 
    /**
     * Acts as a user for tests
     *
     * @param null $user
     * @param bool $is_admin
     * @return User user
     */
    public function signInUser($user = null)
    {
        // If user, else create
        $this->user = $user ?: create(User::class);

        $this->actingAs($this->user)
            ->assertAuthenticated();

        return $this->user;
    }

    /**
     * Seeds Database
     * 
     */
    public function seedDB()
    {
        return $this->artisan("db:seed");
    }
}
