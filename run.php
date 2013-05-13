<?php

// require config
require_once 'bootstrap.php';
require_once TOBY_ROOT.'/Toby.class.php';

// init & run
array_shift($argv);
    
Toby::init();
Toby::runAction(array_shift($argv), array_shift($argv), $argv);