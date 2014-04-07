<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $fileName = DATA_FOLDER . 'application';
        $content = "Very important data stored at " . date('Y-m-d H:i:s');

        $rwFactory = new AbstractFactory\TextFileReaderWriterFactory();
        //$rwFactory = new AbstractFactory\XMLFileReaderWriterFactory();

        $reader = $rwFactory->createReader();
        $writer = $rwFactory->createWriter();

        $writer->write($fileName, $content);
        echo "Content loaded: " . htmlentities($reader->read($fileName)) . "<br/>\n";
        echo "Content saved: " . $content . "<br/>\n";

        ?>
    </body>
</html>
