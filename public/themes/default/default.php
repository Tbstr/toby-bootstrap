<?php

use Toby\Assets\Assets;

//  This is the configuration file for your theme. Per default it is named the same way
//  as your theme directory. You can write alternative configurations with different names.
//  In this case you have to set the »themeFunction« parameter inside the toby.cfg.php.
//
//  Here you can execute all kind of code necessary for your project or theme. Usually you
//  use this file to specify the assets globally or for specific pages as in the following
//  example:
//
//  Assets::setStandard()
//  ->addCSS('css/standard.css')
//  ->addJavaScript('js/standard.js');
//
//  Assets::setResolvePath('index/home')
//  ->addCSS('css/home.css')
//  ->addJavaScript('js/home.js');
//
//  Assets::setResolvePathDefault()
//  ->addCSS('css/default.css')
//  ->addJavaScript('js/default.js');

//  The version query will be appended to the link paths to control caching without renaming
//  the files. Increase or change this value if you have updates.

Assets::$cacheBuster = '1';