<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $fileName = 'data'.DIRECTORY_SEPARATOR.'application';
        $readerFactory = new FactoryMethod\SimpleReaderFactory();
        //$reader = $readerFactory->createReader(FactoryMethod\SimpleReaderFactory::TXT_READER);
        $reader = $readerFactory->createReader(FactoryMethod\SimpleReaderFactory::XML_READER);

        echo "Content loaded: " . htmlentities($reader->read($fileName));
        ?>
    </body>
</html>
