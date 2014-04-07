<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        function tag(Proxy\AbstractImage $img) {
            return sprintf('<img src="data:image/%s;base64,%s" alt="" width="%s" height="%s" />', $img->getType(), base64_encode($img->dump()),  $img->getWidth(), $img->getHeight());
        }

        $path = __DIR__ . '/data/barimage.bmp';

//        $image = new Proxy\RawImage($path);


        $image = new Proxy\ImageProxy($path);


        echo tag($image);
        ?>
    </body>
</html>
