<?php 
include('.\include\ls.php');
include('.\include\pb.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$ini_array = parse_ini_file("config.ini", true /* will scope sectionally */);
$ls= new ls();
//$ls->localelab();
$directory = new DirectoryIterator(dirname(__FILE__));
$di =str_replace('include','',$directory->getPath());
//var_dump($ini_array);
$lpath = glob($di.'\\'.$ini_array['percorsi']['toelab'].'*.xml');
//echo $di.$ini_array['percorsi']['procfiles'];
//var_dump($lpath);
    foreach ($lpath as $f) {
   echo  "rimosso file {$f}<br>";
$ls->reset($f);
    }
 //   echo $di.$ini_array['percorsi']['procfiles'];
    $lpath = glob($di.'\\'.$ini_array['percorsi']['procfiles'].'*.xml');
  //  var_dump($lpath);
    foreach ($lpath as $f) {
   echo  "rimosso file {$f}<br>";
$ls->reset($f);
    }
?>
 