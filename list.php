<div class="row " >
  <div class="container">
 <div class = "col-lg-12"  >

<p align="center">
<img src="assets/cmacc-trans.png"  height="50px" />
</p>


<?
if(! ($dir == './')) {
        $rootdir = pathinfo($dir);
        //doc_list.php cotntains layout
        //      include("doc_list.php");
        //}
        //echo "Rootdir: <a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>".$rootdir['dirname']."</a><br>";

	
 echo "<hr><div id='updir'><img src='assets/arrowup.png' height=25><h3 class='sc subtitle'><a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>".$rootdir['dirname']."</a><h3></div>";

   echo "<h2 class='sc subtitle2'> $dir</h3>";
} 


$files = scandir($path.$dir);

if(file_exists($path.$dir . 'include.php'))
    include $path.$dir . 'include.php';

echo '<br><div class="listings">';
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


