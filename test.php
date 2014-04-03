<?php

$path="test.jpg";
$size = getimagesize($path);
    if(!$size) {
        return 0;
    }
else{
echo "valid image!\n";
var_export($size);
}


$image = imagecreatefromjpeg($path);

?>
