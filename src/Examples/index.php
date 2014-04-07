<?php
require_once('init.php');

try {
    if (array_key_exists('pattern', $_GET)) {
        $page = new PatternPage();
        $page->loadPattern($_GET['pattern']);
    } else {
        $page = new MainPage();
    }
    $page->run();
} catch (Exception $e) {
    $page = new ExceptionPage();
    $page->setException($e);
    $page->run();
}

echo $page->render();