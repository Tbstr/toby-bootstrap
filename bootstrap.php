<?php

/* DEFINE ENVIRONMENT VARIABLES
 * 
 * For initializing toby the following environmental
 * constants have to be set:
 * 
 * PROJECT_ROOT: path to project directory
 * APP_ROOT: path to application directory
 * PUBLIC_ROOT: path public directory
 * TOBY_ROOT: path toby core files
 * 
 */

define('PROJECT_ROOT', dirname(__FILE__));
define('APP_ROOT', PROJECT_ROOT.'/app');
define('PUBLIC_ROOT', PROJECT_ROOT.'/public');
define('TOBY_ROOT', PROJECT_ROOT.'/toby');