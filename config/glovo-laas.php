<?php

return [

    'stageEnv' => false,

    'max_retries' => 3,

    'auth' => [
        'clientId' => env('GLOVO_CLIENT_ID'),
        'clientSecret' => env('GLOVO_CLIENT_SECRET'),
    ],

];
