<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | The allowed_methods and allowed_headers options are case-insensitive.
    |
    | You don't need to provide both allowed_origins and allowed_origins_patterns.
    | If one of the strings passed matches, it is considered a valid origin.
    |
    | If ['*'] is provided to allowed_methods, allowed_origins or allowed_headers
    | all methods / origins / headers are allowed.
    |
    */

    /*
     * Select unwanted headers you want to refuse.
     * Example: ['X-Powered-By']
     */
    'unwanted_headers' => explode(',', env('VHIWEB_SECURITY_UNWANTED_HEADERS', 'X-Powered-By,server,Server')),

    /*
     * Select unwanted headers you want to refuse.
     * Example: ['api/*']
     */
    'allow_app_environments' => explode(',', env('VHIWEB_SECURITY_ALLOW_APP_ENVIRONMENTS', 'production,staging')),
];