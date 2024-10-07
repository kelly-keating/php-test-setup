<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Schema
    |--------------------------------------------------------------------------
    |
    | Here you can define the schemas for your GraphQL API. You can have
    | multiple schemas if needed.
    |
    */
    'schemas' => [
        'default' => [
            'query' => [
                'users' => \App\GraphQL\Queries\UserQuery::class,
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Types
    |--------------------------------------------------------------------------
    |
    | Here you can define your GraphQL types. These are the types that will
    | be used in your queries and mutations.
    |
    */
    'types' => [
        'User' => \App\GraphQL\Types\UserType::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Queries
    |--------------------------------------------------------------------------
    |
    | You can define the queries you want to expose in your GraphQL API.
    |
    */
    'queries' => [
        'users' => \App\GraphQL\Queries\UserQuery::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Mutations
    |--------------------------------------------------------------------------
    |
    | You can define mutations here. Mutations are used for creating,
    | updating, or deleting data.
    |
    */
    'mutations' => [
        // 'createUser' => \App\GraphQL\Mutations\CreateUserMutation::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | You can define middleware for your GraphQL routes.
    |
    */
    'middleware' => [
        'graphql' => [
            // Middleware for GraphQL
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Error Handling
    |--------------------------------------------------------------------------
    |
    | Here you can define how to handle errors when executing GraphQL queries.
    |
    */
    'error_handling' => [
        // Configure error handling
    ],

    /*
    |--------------------------------------------------------------------------
    | Logging
    |--------------------------------------------------------------------------
    |
    | You can enable or disable logging for GraphQL queries.
    |
    */
    'logging' => [
        'enabled' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Playground
    |--------------------------------------------------------------------------
    |
    | Here you can configure the GraphQL Playground for testing your API.
    |
    */
    'playground' => [
        'enabled' => true,
        'path' => '/graphql-playground',
    ],
];
