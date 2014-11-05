<div class="container">
<?

//This displays the path, current file name, and provides the edit and show options //



echo "Root directory: <a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a><br>
<b>$filenameX</b>   
<br><br>
";
?>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Source</a></li>
    <li><a href="#tabs-2">Render</a></li>
    <li><a href="#tabs-3">Edit</a></li>
 </ul>



<div id="tabs-1">

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

<div id="tabs-2">
<? 
	echo "playing with $dir<br>";

	echo `perl parser2.pl $path/$dir`;
	#system("perl parser2.pl $path/$dir  > $path/Output999.html");
	#echo file_get_contents("Output999.html", FILE_USE_INCLUDE_PATH);



?>
</div>

<div id="tabs-3">

<?
echo "
<form action=$_SERVER[PHP_SELF] method='post'>
        <textarea id='textedit' cols=125 rows=30 name='newcontent' style='padding:20px;'>";
echo file_get_contents($path.$dir, FILE_USE_INCLUDE_PATH);

echo '  </textarea><br>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
        <input type="hidden" name="file" value="'.$dir.'">
        <input type="hidden" name="action" value="source">
        </form>';

?>
</div>

</div></div>

</div>
