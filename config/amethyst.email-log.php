<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Managers
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components
    | used by each manager.
    |
    */
    'managers' => [
        'email-log' => [
            /*
            |--------------------------------------------------------------------------
            | Table Name
            |--------------------------------------------------------------------------
            |
            | This is the table name used while interacting with the database
            |
            */
            'table' => 'amethyst_email_logs',

            /*
            |--------------------------------------------------------------------------
            | Class Entity
            |--------------------------------------------------------------------------
            |
            | The class of the model used by the manager.
            | Change this if you have to add more relations or custom logic.
            |
            */
            'model' => Railken\Amethyst\Models\EmailLog::class,

            /*
            |--------------------------------------------------------------------------
            | Class Schema
            |--------------------------------------------------------------------------
            |
            | The class of the schema used by the manager.
            | Change this if you want to update the attributes.
            */
            'schema' => Railken\Amethyst\Schemas\EmailLogSchema::class,

            /*
            |--------------------------------------------------------------------------
            | Class Repository
            |--------------------------------------------------------------------------
            |
            | The class of the repository used to perform all queries.
            | Change this if you have to add more complex queries (e.g. ::findOneBy).
            |
            */
            'repository' => Railken\Amethyst\Repositories\EmailLogRepository::class,

            /*
            |--------------------------------------------------------------------------
            | Class Serializer
            |--------------------------------------------------------------------------
            |
            | The class of the serializer used to serialize the model.
            | Change this if you have to add more data while serializing.
            |
            */
            'serializer' => Railken\Amethyst\Serializers\EmailLogSerializer::class,

            /*
            |--------------------------------------------------------------------------
            | Class Validator
            |--------------------------------------------------------------------------
            |
            | The class of the validator used to validate the parameters.
            | Change this if you have to add more complex validation.
            | A validation handled by the single attributes is always preferred to this.
            |
            */
            'validator' => Railken\Amethyst\Validators\EmailLogValidator::class,

            /*
            |--------------------------------------------------------------------------
            | Class Authorizer
            |--------------------------------------------------------------------------
            |
            | The class of the authorizer used to authorize the user.
            | Change this if you have to add more complex authorization.
            |
            */
            'authorizer' => Railken\Amethyst\Authorizers\EmailLogAuthorizer::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'email-log' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\EmailLogsController::class,
                'router'      => [
                    'as'        => 'email-log.',
                    'prefix'    => '/email-logs',
                ],
            ],
        ],
    ],
];
