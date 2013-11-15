<?php

// require & init
require_once '../env.php';
require_once TOBY_ROOT.'/Toby.class.php';

Toby::getInstance()->init(empty($_GET['r']) ? 'index' : $_GET['r'], Toby::SCOPE_WEB);