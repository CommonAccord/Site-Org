<?

$path = './';
$dir="Doc/event/escrow/";

$content = file_get_contents($dir, FILE_USE_INCLUDE_PATH);

$contents = explode("\n", $content);
$rootdir = pathinfo($dir);
$filenameX = basename($dir);

?>


<?
 include('list.php');

?>


