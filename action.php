<?php
require 'vendor/autoload.php';
use Mike42\GfxPhp\Image;
//use Intervention\Image\ImageManagerStatic as Image;


$time_start = microtime(true);
$img = Image::fromFile("/data/project/image-native/file_example_PNG_500kB.png");
$img2 = $img->scale(1275, 849);
$img2->write("/data/project/image-native/rescale.png");
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo '<b>Total Execution Time:</b> '.$execution_time.' Second';


// $filename = $_FILES['file']['name'];
// $tmpname = $_FILES['file']['tmp_name'];
// $destinationPath = "/data/project/image-native/";
// $img = Image::make(realpath($tmpname));
// $img->greyscale()->save($destinationPath.'/'.time().'.'.$filename);
//echo 'sukses';
