<body style="margin:40;padding:0">
<?php

echo "<a href=index.php?action=source&file=" .$dir.">Source</a><br><br>";

$document = `perl parser-print.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<font color='red'>{",$document);

$document=str_replace("}","}</font>",$document);

//kludge to let html headers have formatting.

$document=str_replace("(Curly-)","{",$document);

$document=str_replace("(-Curly)","}",$document);
 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
