<?php

use Toby\Toby;

// require config
require_once 'env.php';
require_once TOBY_ROOT.'/Toby.php';

// init & run
array_shift($argv);

$toby = Toby::getInstance();
$toby->init(null, Toby::SCOPE_LOCAL);

if(count($argv) >= 2)
{
    $response = $toby->runAction(array_shift($argv), array_shift($argv), $argv);
    if($response !== null) $response->send();
}
