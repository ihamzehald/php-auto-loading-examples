<?php

/**
 * Classes auto loader 
 *
 * @param [type] $class
 * @return void
 */
function src_autoloader($class)
{
    require_once('src/' . $class . '.php');
}

/**
 * Register auto loaders list
 */
spl_autoload_register('src_autoloader');
