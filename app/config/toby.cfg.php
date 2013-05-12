<?php

// -- APP VARS --
$appURL                 = 'http://www.yourdomain.com';
$secureAppURL           = 'https://www.yourdomain.com';

$theme                  = 'default';
//$themeConfig           = 'default_v2';

$defaultResolve         = 'index/index';
$defaultTitle           = 'Project Name';

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
$fatalNotificationTo    = 'your@mailadress.com';