<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Remote Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default connection that will be used for SSH
    | operations. This name should correspond to a connection name below
    | in the server list. Each connection will be manually accessible.
    |
    */

    'default' => 'production',

    /*
    |--------------------------------------------------------------------------
    | Remote Server Connections
    |--------------------------------------------------------------------------
    |
    | These are the servers that will be accessible via the SSH task runner
    | facilities of Laravel. This feature radically simplifies executing
    | tasks on your servers, such as deploying out these applications.
    |
    */

    'connections' => [
        'production' => [
            'host'      => env('REMOTE_HOST', ''),
            'username'  => env('REMOTE_USERNAME', ''),
            'password'  => env('REMOTE_PASSWORD', ''),
            'key'       => env('REMOTE_KEY', ''),
            'keytext'   => env('REMOTE_KEYTEXT', ''),
            'keyphrase' => env('REMOTE_KEYPHRASE', ''),
            'agent'     => env('REMOTE_AGENT', ''),
            'timeout'   => 10,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Remote Server Groups
    |--------------------------------------------------------------------------
    |
    | Here you may list connections under a single group name, which allows
    | you to easily access all of the servers at once using a short name
    | that is extremely easy to remember, such as "web" or "database".
    |
    */

    'groups' => [
        'web' => ['production'],
    ],

];
