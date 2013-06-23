<?php

// require config
require_once 'env.php';
require_once TOBY_ROOT.'/Toby.class.php';

// init & run
array_shift($argv);
    
Toby::init();
if(count($argv) >= 2) Toby::runAction(array_shift($argv), array_shift($argv), $argv);