<?php
error_reporting(E_ALL);
$path = '/Users/jgh/Sites/Alpha/Alpha/';

if(!isset($_REQUEST['action'])) { 
	$_REQUEST['action'] = "list"; 
}

if(isset($_REQUEST['file'])) {
	$dir = $_REQUEST['file'];
} else {
	$dir = 'Doc/'; 
}

if($_REQUEST['action'] == 'list') {

if(! ($dir == 'Doc/')) {
	$rootdir = pathinfo($dir);	
	echo "<body style='font-size: 200%;'> <b><a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a></b> &emsp;";
}
echo "<u>$dir:</u><br>";


$files = scandir($dir);

if(file_exists($dir . 'include.php'))
    include $dir . 'include.php';

foreach($files as $f) {
	if(is_dir($path.$dir.$f)) {
		if( !( ($f == '.') || ($f == '..')) ) {

			echo "<br> &nbsp; <a href=$_SERVER[PHP_SELF]?action=list&file=$dir$f/>$f</a>";
		}
	}
	else {
		if( !( ($f == 'include.php') ) ) {
			echo "<br><a href=$_SERVER[PHP_SELF]?action=source&file=$dir$f>$f</a>";
		}
	}
}

} // end 'list'

else if($_REQUEST['action'] == 'source') {

if(isset($_REQUEST['submit'])) {
	$fp = fopen($dir, "w");
	$data = $_REQUEST['newcontent'];
	$data = preg_replace('/\r\n/', "\n", $data);
	fwrite($fp, $data);
	fclose($fp);
}

$content = file_get_contents($dir, FILE_USE_INCLUDE_PATH);

$contents = explode("\n", $content);

$rootdir = pathinfo($dir);
$filenameX = basename($dir);

echo "<body style='font-size: 200%;'><a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a><br><br><br>
<b>$filenameX</b>   (<a href=$_SERVER[PHP_SELF]?action=edit&file=$dir>Edit</a>):  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; <a href=$_SERVER[PHP_SELF]?action=render&file=$dir><b>Show the Document</b></a><br><br>

<table rules='none'; border='0'>";

foreach($contents as $n) {
	list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

	if(preg_match('/\[(.+?)\]/', $v, $matches)) { 
		$v = "<a href=$_SERVER[PHP_SELF]?action=source&file=Doc/$matches[1]>$v</a>";
	}
	
	echo "<tr>";
	if(isset($k)) { echo "<th height='10' style='text-align:right'>$k</th><td width='20'></td><td>$v</td>"; }
	else { echo "$k"; }
	echo "</tr>";
}

echo "</table></body>";
} // end 'source'

else if($_REQUEST['action'] == 'render') {

if(isset($_REQUEST['submit'])) {
	echo "RENDERING...........<br>";
}

echo `perl parser2.pl $path/$dir`;
#system("perl parser2.pl $path/$dir  > $path/Output999.html");
#echo file_get_contents("Output999.html", FILE_USE_INCLUDE_PATH);

} // end 'render'

else if($_REQUEST['action'] == 'edit') {

echo "Editing $dir<br><br>
<form action=$_SERVER[PHP_SELF] method='post'>
        <textarea cols=100 rows=30  name='newcontent'>";

echo file_get_contents($dir, FILE_USE_INCLUDE_PATH);

echo '	</textarea><br>
        <input type="submit" name="submit" value="Save">
	<input type="hidden" name="file" value="'.$dir.'">
        <input type="hidden" name="action" value="source">
        </form>';

} // end 'edit'

else if($_REQUEST['action'] == 'pull') {

echo `cd /var/www/www.commonaccord.org/Alpha; git reset --hard HEAD; git pull -f 2>&1`;

}


?>
