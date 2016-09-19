<?php

return [

    // app
    'app' => [
        'url'        => 'http://www.yourdomain.com',        // the URL of your application
//      'url_secure' => 'https://www.yourdomain.com'        // optional, the secure URL of your application
    ],
    
    // theme
    'theme' => [
        'name'     => 'default',                            // maps to dir name in public/themes
//      'function' => 'default_min'                         // optional, override if the name of your theme function differs from the theme name
    ],
    
    // defaults
    'default' => [
        'resolve' => 'index/index',                         // will be called when requested controller does not exist
        'title'   => 'Project Name'
    ],
    
//  'force_resolve' => 'controller/action',                 // optional, will be called on every request
    
    // mysql
    'mysql' => [
        'auto_connect' => false,
        'host'         => 'mysql_host',
        'user'         => 'mysql_user',
        'password'     => 'mysql_password',
        'db'           => 'mysql_db'
    ],
    
    // sessions
    'session' => [
        'mysql' => [
            'enable' => false,
            'table'  => 'table_name'
        ]
    ],
    
    // logging
    'logging' => [
        'log_mysql_queries' => true,
        'log_request_times' => true,
    ],
    
    // error handling
    'error' => [
        'strict'                => true,
        'display'               => true,
        'fatal_notification_to' => ['your-email@address.ext'] // one or more emails to be notified in case of fatal errors
    ]
    
];