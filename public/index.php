<?php

use Toby\Toby;

// require
require_once '../env.php';
require_once TOBY_ROOT.'/Toby.php';

// fetch request
$request = empty($_GET['r']) ? 'index' : $_GET['r'];
unset($_GET['r']);

// init
Toby::getInstance()->init($request, Toby::SCOPE_WEB);