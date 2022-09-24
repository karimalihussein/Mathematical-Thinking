<?php

declare(strict_types = 1);


use MathPHP\Algebra;


require_once __DIR__ . '/../vendor/autoload.php';

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'data' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . 'App.php';









