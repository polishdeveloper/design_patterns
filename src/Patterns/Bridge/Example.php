<?php
namespace Bridge;

class Example extends \PatternExample {

    public function execute()
    {
        $links = array('www.google.com', 'www.twitter.com', 'www.youtube.com', 'logicait.pl');
        $websiteImp = new IndexedWebsiteImplementor('www.blogger.com', $links);
        $website = new WebSite($websiteImp);
        var_dump($website->containsLinks(array('www.google.com', 'www.youtube.com')));
        $presentationWebsite = new PresentationWebsite($websiteImp);
        echo "<br />";
        echo $presentationWebsite->getAddress(), "\n";
    }
}