<?php
namespace Proxy;

class Example extends \PatternExample {


    private function outputTag(AbstractImage $img) {
        echo sprintf('<img src="data:image/%s;base64,%s" alt="" width="%s" height="%s" />',
            $img->getType(), base64_encode($img->dump()),  $img->getWidth(), $img->getHeight());
    }

    public function execute()
    {
        $path = __DIR__ . '/data/barimage.bmp';
//        $image = new RawImage($path);
        $image = new ImageProxy($path);
        $this->outputTag($image);
    }
}