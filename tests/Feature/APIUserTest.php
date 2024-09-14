<?php

use App\Models\User;

test('GET api/users vrátí seznam uživatelů', function () {
    User::factory(10)->create();

    $response = $this->get('api/users');

    $response->assertStatus(200);
    $response->assertJsonCount(10);
});

test('GET api/users/{user} vrátí specifického uživatele', function () {
    $user = User::factory()->create();

    $response = $this->get("api/users/{$user->id}");

    $response->assertStatus(200);
    $response->assertJsonFragment(['id' => $user->id]);
});

test('POST api/users vytvoří nového uživatele', function () {
    $userData = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password',
    ];

    $response = $this->post('api/users', $userData);

    $response->assertStatus(201);
    $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
});

test('PUT api/users/{user} aktualizuje uživatele', function () {
    $user = User::factory()->create();
    $updatedData = ['name' => 'Jane Doe'];

    $response = $this->put("api/users/{$user->id}", $updatedData);

    $response->assertStatus(200);
    $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Jane Doe']);
});

test('DELETE api/users/{user} smaže uživatele', function () {
    $user = User::factory()->create();

    $response = $this->delete("api/users/{$user->id}");

    $response->assertStatus(200);
    $this->assertModelMissing($user);
});
