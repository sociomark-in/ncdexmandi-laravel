<?php

if (! function_exists('resize_image')) {
    function resize_image($filename, $filepath, $w, $h = -1)
    {
        $name = explode(".", $filename)[0];
        $source = imagecreatefromjpeg($filepath . $filename);
        $resized = imagescale($source, $w, $h);
        $newfilepath = $filepath . $name . "_" . $w . "w.jpg";
        if(imagejpeg($resized, $newfilepath)){
            return $newfilepath;
        }else {
            return false;
        }
    }
}
