<body style="margin:20;padding:0">
<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);

?>


<?php


//This displays the path, current file name, and provides the edit and show options //

echo "<a href=index.php?action=source&file=" .$dir.">Source</a> &emsp; ";

echo "<a href=index.php?action=edit&file=" .$dir.">$Edit_Message</a> &emsp; ";


echo "<a href=index.php?action=openedit&file=" .$dir.">$Complete_Fields_Message</a> &emsp; ";

echo " &emsp;  &emsp;  &emsp; &emsp; ";

echo "<a href=index.php?action=print&file=" .$dir.">$Print_Message</a> &emsp; ";

echo "<a href=" . URLFORDOCSINREPO . $dir.">Github</a>";

echo "<hr>";


?>


<?php

$lib_path = LIB_PATH;
$document = `perl $lib_path/parser.pl $path/$dir`;

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
