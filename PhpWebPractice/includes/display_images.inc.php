

<?php
//get images from the directory and put them into an array


function getImagesFromDir($path) {
    $images = array();
    if ($img_dir = @opendir($path)) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            } 
         } closedir($img_dir);
    }
    return $images;
}
//this gets a random image from the array  ---- question says to use rand()

function getRandomFromArray($ar) {//count array, generate random number, return 
   $rand = rand(0, count($ar)-1);
   return $ar[$rand];   
}

$root = '';
$path = 'images/';
$imgList = getImagesFromDir($root . $path);
$img = getRandomFromArray($imgList);
