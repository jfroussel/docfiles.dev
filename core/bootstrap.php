<?php
/**
 * User: jeff
 * Date: 26/12/16
 * Time: 16:55
 */
require_once __DIR__.'/config.inc.php';
require_once __DIR__.'/../vendor/autoload.php';

use RedBeanPHP\Facade as R;

/**
 * Verify if DB existe
 */

if(empty(R::$currentDB)){
    $dsn = sprintf('%s:host=%s;dbname=%s', DB_TYPE,  DB_HOST, DB_NAME);
    R::setup($dsn, DB_USER, DB_PASSWORD);
}

R::close();