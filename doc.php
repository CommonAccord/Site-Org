<body style="margin:40;padding:0">
<?php

echo "<a href=index.php?action=source&file=" .$dir.">Source</a><br><br>";

$document = `perl parser-print.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){  
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
