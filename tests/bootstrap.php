<?php

error_reporting(E_ALL | E_STRICT);
set_include_path(
    implode(PATH_SEPARATOR, array(
        get_include_path(),
        realpath(__DIR__ . '/../src'),
        realpath(__DIR__ . '/Foo/Mock')
    ))
);
defined('TESTS_PATH') || define('TESTS_PATH', dirname(__FILE__));
date_default_timezone_set('America/Denver');

include 'Foo/Bar.php';
include 'Foo/BarMock.php';
include 'Foo/Baz.php';
include 'Foo/BazMock.php';
