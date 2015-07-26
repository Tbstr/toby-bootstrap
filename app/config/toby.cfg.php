<?php

// -- APP VARS --
$appURL                 = 'http://www.yourdomain.com';
$appURLSecure           = 'https://www.yourdomain.com';

$theme                  = 'default';
//$themeFunction          = 'default_v2';

$defaultResolve         = 'index/index';
$defaultTitle           = 'Project Name';

//$forceResolve           = 'controller/action';

// -- MYSQL --
$mySQLAutoConnect       = false;
$mySQLAccessData        = array(
                            'host'      => '',
                            'user'      => '',
                            'password'  => '',
                            'db'        => ''
                            );

// -- SESSIONS --
$sessionUseMySQL        = false;
$sessionMySQLTable      = '';

// -- LOG --
$logMySQLQueries        = true;
$logRequestTimes        = true;

// -- DEBUG --
$errorsStrict           = true;
$displayErrors          = true;

$fatalNotificationTo    = 'tobifriese@gmail.com';