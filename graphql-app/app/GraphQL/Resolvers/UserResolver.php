<?php

namespace App\GraphQL\Resolvers;

use App\Models\User;

class UserResolver {
    public function resolveUsers() {
        return User::all();
    }
}
