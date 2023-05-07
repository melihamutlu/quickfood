<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

User::factory()
    ->count(5)
    ->state(new Sequence(
        ['name' => 'John Doe', 'email' => 'john.doe@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane.doe@example.com'],
        ['name' => 'Bob Smith', 'email' => 'bob.smith@example.com'],
        ['name' => 'Alice Brown', 'email' => 'alice.brown@example.com'],
        ['name' => 'Tom Jones', 'email' => 'tom.jones@example.com'],
    ))
    ->create();

