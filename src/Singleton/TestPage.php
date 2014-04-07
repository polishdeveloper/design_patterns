<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        Singleton\Logger::getInstance()->log("INFO: New log entry on " . date('Y-m-d H:i:s'));
        ?>
        Entry should be added to log
    </body>
</html>
