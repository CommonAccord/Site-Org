<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<div class="container">
<?php
/* The length of the Missing Fields part of the text.*/
$minDocLength = 101;

$document = `perl parser.pl $path/$dir`;

//This displays the path, current file name, and provides the edit and show options //

echo " <a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>Org$rootdir[dirname]</a>/<b>$filenameX</b>
&emsp; &emsp; &emsp; &emsp; " ;

if (strlen($document) > $minDocLength){  
 echo " <a href=$_SERVER[PHP_SELF]?action=print&file=$rootdir[dirname]/$filenameX>Print</a>
  &emsp;  &emsp;  &emsp; " ;
}

echo "<a href=https://github.com/$GitHubRepo/blob/master/Doc/$rootdir[dirname]/$filenameX>See at GitHub</a>

&emsp;  &emsp;  &emsp;  
<a href=https://github.com/$GitHubRepo/edit/master/Doc/$rootdir[dirname]/$filenameX>Edit at GitHub</a>

";


?>

<?php

if (strlen($document) > $minDocLength){  
  echo "<div id='tabs'><ul><li><a href='#tab-render'>Document</a></li><li><a href='#tab-source'>Source</a></li><li><a href='#tab-edit'>Edit</a></li></ul><div id='tab-render'>" ;
  echo $document;}
else {
  echo "<div id='tabs'><ul><li><a href='#tab-source'>Source</a></li><li><a href='#tab-edit'>Edit</a></li></ul><div id='tab-render'>" ;

}
?>
</div>



<div id="tab-source">




<!--table formatting for the document -->
<table class="TFtable";>
<?php 
foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

        if(preg_match('/\[\?(.+?)\]/', $v, $matches)) {
                $v = "<a href=$matches[1]>$v</a>";
        }

        else if(preg_match('/\[(.+?)\]/', $v, $matches)) {
                $v = "<a href=$_SERVER[PHP_SELF]?action=source&file=$matches[1]>$v</a>";
        }

        echo "<tr>";
        if(isset($k)) { echo "<th height='10' style='text-align:right'>$k</th><td width='20'></td><td>$v</td>"; }
        else { echo "$k"; }
        echo "</tr>";
}

?>
</table>

</div>

<div id="tab-edit">

<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
        <textarea id='textedit' cols=125 rows=30 name='newcontent' style='padding:20px;'>";
echo file_get_contents($path.$dir, FILE_USE_INCLUDE_PATH);

echo '  </textarea><br>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
        <input type="hidden" name="file" value="'.$dir.'">
        <input type="hidden" name="action" value="source">
        </form>';

?>
</div>

</div>




</div></div>

</div>
