<?php

// require config
require_once 'env.php';
require_once TOBY_ROOT.'/Toby.class.php';

// init & run
array_shift($argv);
    
$toby = Toby::getInstance();
$toby->init(false, Toby::SCOPE_LOCAL);
if(count($argv) >= 2) $toby->runAction(array_shift($argv), array_shift($argv), $argv);