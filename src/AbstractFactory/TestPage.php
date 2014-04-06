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
        $content = "Very important data";

        //$rwFactory = TextFileReaderWriterFactory::getInstance();
        $rwFactory = XMLFileReaderWriterFactory::getInstance();

        $reader = $rwFactory->createReader();
        $writer = $rwFactory->createWriter();

        $writer->write($fileName, $content);
        echo "Content loaded: " . htmlentities($reader->read($fileName));
        echo "Content saved: " . $content . "<br/>\n";

        ?>
    </body>
</html>
