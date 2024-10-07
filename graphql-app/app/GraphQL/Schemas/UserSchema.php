<?php

namespace App\GraphQL\Schemas;

use Rebing\GraphQL\Support\Schema;

class UserSchema extends Schema
{
    protected $query = \App\GraphQL\Queries\UserQuery::class;
}
