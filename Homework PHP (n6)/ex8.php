<html>
    <head>
        <title>ex8 Php</title>
    </head>
    <body>
        <?php
$uri = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
echo $uri;
        ?>
    </body>
</html>