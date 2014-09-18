<div class="row " >
  <div class="container">
 <div class = "col-lg-12"  >

<p align="center">
<img src="assets/cmacc-trans.png"  height="100px" />
</p>


<?
if(! ($dir == 'Doc/')) {
        $rootdir = pathinfo($dir);
        //doc_list.php cotntains layout
        //      include("doc_list.php");
        //}
        //echo "Rootdir: <a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>".$rootdir['dirname']."</a><br>";

	
 echo "<hr><div id='updir'><h3 class='sc'><a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>".$rootdir['dirname']."</a><img src='assets/arrowup.png' height=25><h3></div>";

   echo "<h2 class='sc subtitle2'> $dir</h3>";
}


$files = scandir($dir);

if(file_exists($dir . 'include.php'))
    include $dir . 'include.php';

echo '<br><br><br><div class="listings">';
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


