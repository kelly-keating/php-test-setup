<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
use App\Models\User;

class UserQuery extends Query
{
    protected $attributes = [
        'name' => 'users',
        'description' => 'A query that returns all users'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('User')); // (\App\GraphQL\Types\UserType::class);
    }

    public function resolve($root, $args)
    {
        return User::all();
    }
}