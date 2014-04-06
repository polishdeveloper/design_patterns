<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function __autoload($className) {
            include_once $className . '.php';
        }

        $fileName = 'application';
        $readerFactory = new SimpleReaderFactory();
        $reader = $readerFactory->createReader(SimpleReaderFactory::TXT_READER);
        //$reader = $readerFactory->createReader(SimpleReaderFactory::XML_READER);

        echo "Content loaded: " . htmlentities($reader->read($fileName));
        ?>
    </body>
</html>
