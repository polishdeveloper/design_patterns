<?php
define('DATA_FOLDER', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
error_reporting(E_ALL);

function __autoload($className) {
    $components = explode('\\', $className);
    $filename = array_pop($components);
    $pathToFile = implode(DIRECTORY_SEPARATOR, $components);
    include_once __DIR__ . DIRECTORY_SEPARATOR . $pathToFile . DIRECTORY_SEPARATOR . $filename . '.php';
}

