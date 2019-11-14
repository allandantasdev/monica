<?php

namespace Tests\Api\Authentication;

use Tests\ApiTestCase;

class ApiAuthenticateTest extends ApiTestCase
{
    public function test_guest_is_rejected()
    {
        $response = $this->json('GET', '/api/contacts');

        $response->assertStatus(401);
        $response->assertJsonFragment([
            'message' => 'Unauthenticated.',
        ]);
    }
}
