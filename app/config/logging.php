<?php

return [

    // config vars
    'config_vars' => [
        
    ],

    // config
    'config' => [
        'rootLogger' => [
            'appenders' => ['sys-file', 'error-file'],
        ],
        'loggers' => [
            'toby.request-times' => [
                'appenders' => ['request-times-file'],
                'additivity' => false,
            ],
            'toby.mysql' => [
                'appenders' => ['mysql-queries-file'],
            ],
            'toby.mysql.queries' => [
                'appenders' => ['mysql-queries-file'],
                'additivity' => false,
            ]
        ],
        'appenders' => [
            'sys-file' => [
                'class' => '\Toby\Logging\Appender\LoggingAppenderRotatableFile',
                'layout' => [
                    'class' => 'LoggerLayoutPattern',
                    'params' => [
                        'conversionPattern' => '%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%ex'
                    ]
                ],
                'params' => [
                    'file' => '{APP_ROOT}/logs/sys.log',
                ]
            ],
            'error-file' => [
                'class' => '\Toby\Logging\Appender\LoggingAppenderRotatableFile',
                'layout' => [
                    'class' => 'LoggerLayoutPattern',
                    'params' => [
                        'conversionPattern' => '%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%ex'
                    ]
                ],
                'filters' => [
                    [
                        'class' => 'LoggerFilterLevelRange',
                        'params' => [
                            'levelMin' => 'error'
                        ]
                    ]
                ],
                'params' => [
                    'file' => '{APP_ROOT}/logs/error.log',
                ]
            ],
            'request-times-file' => [
                'class' => '\Toby\Logging\Appender\LoggingAppenderRotatableFile',
                'layout' => [
                    'class' => 'LoggerLayoutPattern',
                    'params' => [
                        'conversionPattern' => '%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%ex'
                    ],
                ],
                'params' => [
                    'file' => '{APP_ROOT}/logs/request-times.log',
                ]
            ],
            'mysql-queries-file' => [
                'class' => '\Toby\Logging\Appender\LoggingAppenderRotatableFile',
                'layout' => [
                    'class' => 'LoggerLayoutPattern',
                    'params' => [
                        'conversionPattern' => '%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%e'
                    ],
                ],
                'params' => [
                    'file' => '{APP_ROOT}/logs/mysql-queries.log',
                ]
            ]
        ],
    ],
    
];