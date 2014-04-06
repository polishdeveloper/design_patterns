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

        $links = array('www.google.com', 'www.twitter.com', 'www.youtube.com', 'logicait.pl');
        $websiteImp = new IndexedWebsiteImplementor('www.blogger.com', $links);
        $website = new Website($websiteImp);
        var_dump($website->containsLinks(array('www.google.com', 'www.youtube.com')));
        $presentationWebsite = new PresentationWebsite($websiteImp);
        echo $presentationWebsite->getAddress(), "\n";
        ?>
    </body>
</html>
