<?php
error_reporting(E_ALL);
$path = './';

if(!isset($_REQUEST['action'])) { 
	$_REQUEST['action'] = "landing"; 
}

if(isset($_REQUEST['file'])) {
	$dir = $_REQUEST['file'];
} else {
	$dir = 'Doc/'; 
}

if($_REQUEST['action'] == 'list') {

if(! ($dir == 'Doc/')) {
	$rootdir = pathinfo($dir);	
	//doc_list.php cotntains layout 
	//	include("doc_list.php");
	//}
	echo "Rootdir: <a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>".$rootdir['dirname']."</a>";
}

$files = scandir($dir);

if(file_exists($dir . 'include.php'))
    include $dir . 'include.php';

echo "<div id='content-list'>";

foreach($files as $f) {
	if(is_dir($path.$dir.$f)) {
		if( !( ($f == '.') || ($f == '..')) ) {

			echo "<br> &nbsp; <a href=$_SERVER[PHP_SELF]?action=list&file=$dir$f/>$f</a>";
		}
	}
	else {
		if( !( ($f == 'include.php') || preg_match('/^\./', $f) ) ) {
			echo "<br><a href=$_SERVER[PHP_SELF]?action=source&file=$dir$f>$f</a>";
		}
	}
}
echo "</div>";

} // end 'list'

// "Show the Document"

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

//source.php includes the formatting for the table that displays the components of a document
include("source.php"); 


foreach($contents as $n) {
	list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);
	
	if(preg_match('/\[\?(.+?)\]/', $v, $matches)) {
                $v = "<a href=$matches[1]>$v</a>";
        }

	else if(preg_match('/\[(.+?)\]/', $v, $matches)) { 
		$v = "<a href=$_SERVER[PHP_SELF]?action=source&file=Doc/$matches[1]>$v</a>";
	}
	
	echo "<tr>";
	if(isset($k)) { echo "<th height='10' style='text-align:right'>$k</th><td width='20'></td><td>$v</td>"; }
	else { echo "$k"; }
	echo "</tr>";
}

echo "</table></table></body>";
} // end 'source'

else if($_REQUEST['action'] == 'render') {

if(isset($_REQUEST['submit'])) {
	echo "RENDERING...........<br>";
}
if(isset($_REQUEST['file'])){
include('file.php');

}


echo `perl parser2.pl $path/$dir`;
#system("perl parser2.pl $path/$dir  > $path/Output999.html");
#echo file_get_contents("Output999.html", FILE_USE_INCLUDE_PATH);
if(isset($_REQUEST['file'])){
echo "</div></div>";

}
} // end 'render'

else if($_REQUEST['action'] == 'edit') {

include('edit.php');

} // end 'edit'

else if($_REQUEST['action'] == 'pull') {

echo `cd /var/www/www.commonaccord.org/Alpha; git reset --hard HEAD; git pull -f 2>&1`;

}

else { include($_REQUEST['action'].'.php'); }

?>
