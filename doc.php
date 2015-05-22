<?php
$document = `perl parser-print.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){  
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
