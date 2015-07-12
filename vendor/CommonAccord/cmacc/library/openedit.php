<body style="margin:20;padding:0">

<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);

$lib_path = LIB_PATH;
$document = `perl $lib_path/openedit-parser.pl $path/$dir`;


echo "<a href=index.php?action=source&file=" .$dir.">Source</a> &emsp; ";

echo "<a href=index.php?action=edit&file=" .$dir.">$Edit_Message</a> &emsp; ";

echo " &emsp;  &emsp;  &emsp; &emsp; ";

echo "<b><a href=index.php?action=doc&file=" .$dir.">$Doc_Message
</a></b> &emsp; ";

echo "<a href=index.php?action=print&file=" .$dir.">$Print_Message</a> &emsp; ";

echo "<a href=" . URLFORDOCSINREPO . $dir.">Github</a>";

echo "<hr>";



  echo "
<div id='tabs'><ul>
</ul><div id='tab-render'>" ;
?>
</div>



<div id="tab-source">

<!--table formatting for the document -->

</div>

<div id="tab-edit">

<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
        <textarea id='textedit' $Text_Edit_Window_Size name='newcontent' style='".TEXTEDITAREASTYLE."'>";

echo $document;

echo "\nWAS=" . date("Y/m/d") . " : " . time() . "\n\n";

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
