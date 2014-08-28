<?php
error_reporting(E_ALL);
$path = '/var/www/www.commonaccord.org/Alpha/';

if(!isset($_REQUEST['action'])) { $_REQUEST['action'] = "list"; }

if(isset($_REQUEST['file'])) {
	$dir = $_REQUEST['file'];
} else {
	$dir = 'Doc/'; 
}

if($_REQUEST['action'] == 'list') {

if(! ($dir == 'Doc/')) {
	$rootdir = pathinfo($dir);
	echo "<a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a><br><br>";
}
echo "$dir:<br><br>";


$files = scandir($dir);

foreach($files as $f) {
	if(is_dir($path.$dir.$f)) {
		if( !( ($f == '.') || ($f == '..')) ) {

			echo "<a href=$_SERVER[PHP_SELF]?action=list&file=$dir$f/>$f</a><br>";
		}
	}
	else {
		echo "<a href=$_SERVER[PHP_SELF]?action=file&file=$dir$f>$f</a><br>";
	}
}

} // end 'list'

else if($_REQUEST['action'] == 'file') {

$content = file_get_contents($dir, FILE_USE_INCLUDE_PATH);

$contents = explode("\n", $content);

$rootdir = pathinfo($dir);

echo "
<a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a><br>
$dir<br>

<h2>Source --> <a href=$_SERVER[PHP_SELF]?action=render&file=$dir>Render</a></h1>

<table border=1>

<table rules='rows'; border=1>";

foreach($contents as $n) {
	list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

	if(preg_match('/\[(.+?)\]/', $v, $matches)) { 
		$v = "<a href=$_SERVER[PHP_SELF]?action=file&file=Doc/$matches[1]>$v</a>";
	}
	
	echo "<tr>";
	if(isset($k)) { echo "<th>$k</th><td width='20'></td><td>$v</td>"; }
	else { echo "$k"; }
	echo "</tr>";
}

echo "</table>";
} // end 'file'

else if($_REQUEST['action'] == 'render') {

system("perl parser2.pl $path/$dir  > $path/Output999.html");
echo file_get_contents("Output999.html", FILE_USE_INCLUDE_PATH);



} // end 'render'

else if($_REQUEST['action'] == 'pull') {

echo `cd /var/www/www.commonaccord.org/Alpha; git pull -f 2>&1`;

}


?>
