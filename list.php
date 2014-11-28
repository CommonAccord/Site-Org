<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<div class="row " >
<div class="container">
<div class = "col-lg-12"  >

<?php
// <p align="center">
// <img src="assets/cmacc-trans.png"  height="50px" />
// </p>

if(! ($dir == './')) {
        $rootdir = pathinfo($dir);

 	
	echo "<div id='updir'><img src='assets/arrowup.png' height=25><h3 class='sc subtitle'><a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>Org".$rootdir['dirname']."</a>/".$rootdir['filename']."</h3>";

 	echo "&emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; <a href=https://github.com/CommonAccord/Org/blob/master/Doc/".$dir.">Github</a></div>";

#   echo "<h2 class='sc subtitle2'>". $rootdir['filename']."</h2>";
} 

$files = scandir($path.$dir);

if(file_exists($path.$dir . 'include.php')) {
echo "<div class='includers'>"; 
   include $path.$dir . 'include.php';
echo "</div>";
}

echo '<div class="listings">';
echo "<div id='content-list'>";
foreach($files as $f) {
        if(is_dir($path.$dir.$f)) {
                if( !( ($f == '.') || ($f == '..')) ) {

                        echo "<br><img height=30 src='assets/folder.png'><a href=$_SERVER[PHP_SELF]?action=list&file=$dir$f/>$f</a>";
                }
        }
        else {
                if( !( ($f == 'include.php') || preg_match('/^\./', $f) ) ) {
                        echo "<br><img height=30 src='assets/play.png'><a href=$_SERVER[PHP_SELF]?action=source&file=$dir$f>$f</a>";
                }
        }
}
echo "</div></div>";
?>


