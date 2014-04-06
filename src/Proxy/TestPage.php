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

        function tag(AbstractImage $img) {
            return '<img src="' . $img->getPath() . '" alt="" width="'
            . $img->getWidth() . '" height="'
            . $img->getHeight() . '" />';
        }

        $path = "barimage.bmp";

        $image = new RawImage($path);
        echo tag($image);

        $image = new ImageProxy($path);
        echo tag($image);

        $image->dump();
        ?>
    </body>
</html>
