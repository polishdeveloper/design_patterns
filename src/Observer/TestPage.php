<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $user = new Observer\User('Lukasz');
        $user->attach(new Observer\TwitterStatusObserver());
        $user->setStatus("I'm working");
        ?>
    </body>
</html>
