<?php

// -- config vars --
$configVars = array();

// -- config --
$config = array(
    "rootLogger" => array(
        "appenders" => array("sys-file", "error-file"),
    ),
    "loggers" => array(
        "toby.request-times" => array(
            "appenders" => array("request-times-file"),
            "additivity" => false,
        ),
        "toby.mysql" => array(
            "appenders" => array("mysql-queries-file"),
        ),
        "toby.mysql.queries" => array(
            "appenders" => array("mysql-queries-file"),
            "additivity" => false,
        )
    ),
    "appenders" => array(
        "sys-file" => array(
            "class" => "\\Toby\\Logging\\Appender\\LoggingAppenderRotatableFile",
            "layout" => array(
                "class" => "LoggerLayoutPattern",
                "params" => array(
                    "conversionPattern" => "%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%ex"
                )
            ),
            "params" => array(
                "file" => "{APP_ROOT}/logs/sys.log",
            )
        ),
        "error-file" => array(
            "class" => "\\Toby\\Logging\\Appender\\LoggingAppenderRotatableFile",
            "layout" => array(
                "class" => "LoggerLayoutPattern",
                "params" => array(
                    "conversionPattern" => "%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%ex"
                )
            ),
            "filters" => array(
                array(
                    "class" => "LoggerFilterLevelRange",
                    "params" => array(
                        "levelMin" => "error"
                    )
                )
            ),
            "params" => array(
                "file" => "{APP_ROOT}/logs/error.log",
            )
        ),
        "request-times-file" => array(
            "class" => "\\Toby\\Logging\\Appender\\LoggingAppenderRotatableFile",
            "layout" => array(
                "class" => "LoggerLayoutPattern",
                "params" => array(
                    "conversionPattern" => "%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%ex"
                ),
            ),
            "params" => array(
                "file" => "{APP_ROOT}/logs/request-times.log",
            )
        ),
        "mysql-queries-file" => array(
            "class" => "\\Toby\\Logging\\Appender\\LoggingAppenderRotatableFile",
            "layout" => array(
                "class" => "LoggerLayoutPattern",
                "params" => array(
                    "conversionPattern" => "%d{d.m.Y H:i:s,u} [%t] %p %c %X - %m > %F:%L%n%e"
                ),
            ),
            "params" => array(
                "file" => "{APP_ROOT}/logs/mysql-queries.log",
            )
        )
    ),
);