<html>
    <head>
        <title>ex7 Php</title>
    </head>
    <body>
        <?php
    echo 'Current PHP version: ' . phpversion();
    echo '<br/>';
        
      $filename = 'ex6.php';
if (file_exists($filename)) {
    echo "$filename беше последно променен: " . date ("F d Y H:i:s.", filemtime($filename));
} else {
    echo "Такъв файл не съществува";
}
        ?>
    </body>
</html>