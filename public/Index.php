<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 7/6/2016
 * Time: 19:43
 */

chdir(dirname(__DIR__));

if (!isset($_GET['controller'])) {
    $controllerName = 'controllers\\IndexController';
    $action = 'indexAction';
}
