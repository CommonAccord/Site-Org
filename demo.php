<?

$path = './';
$dir="Doc/event/escrow/";

$content = file_get_contents($dir, FILE_USE_INCLUDE_PATH);

$contents = explode("\n", $content);
$rootdir = pathinfo($dir);
$filenameX = basename($dir);

?>

<div class="container">
<div class="row">
<div class="col-sm-3">
	<img height="400"  src="assets/escrow.png">
</div>
<div class="col-sm-2" >


<?
 include('list.php');

?>

</div>
</div>
</div>

