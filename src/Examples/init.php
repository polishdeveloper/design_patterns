<?php
define('DATA_FOLDER', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'data' . DIRECTORY_SEPARATOR);
define('PATTERNS_DIRECTORY', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Patterns');
define('VIEWS_DIRECTORY', __DIR__ . DIRECTORY_SEPARATOR . 'views');

include('Framework/Page.php');
include('Framework/View.php');
include('Framework/Layout.php');
include('Pages/ExceptionPage.php');
include('Pages/MainPage.php');
include('Pages/PatternPage.php');
include('Utils/PatternExample.php');

function __autoload($className) {
    $components = explode('\\', $className);
    $pathToFile = implode(DIRECTORY_SEPARATOR, $components);

    include_once PATTERNS_DIRECTORY . DIRECTORY_SEPARATOR . $pathToFile . '.php';
}

