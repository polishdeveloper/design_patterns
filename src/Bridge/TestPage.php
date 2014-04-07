<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $links = array('www.google.com', 'www.twitter.com', 'www.youtube.com', 'logicait.pl');
        $websiteImp = new Bridge\IndexedWebsiteImplementor('www.blogger.com', $links);
        $website = new Bridge\WebSite($websiteImp);
        var_dump($website->containsLinks(array('www.google.com', 'www.youtube.com')));
        $presentationWebsite = new Bridge\PresentationWebsite($websiteImp);
        echo "<br />";
        echo $presentationWebsite->getAddress(), "\n";
        ?>
    </body>
</html>
