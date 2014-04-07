<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $productCache = Prototype\ProductCache::getInstance();


        $book = $productCache->getProduct('b1');

        var_dump($book);

        $book->setDescription("aaaa");

        var_dump($productCache->getProduct('b1'));
        ?>
    </body>
</html>
