<?
if(! ($dir == 'Doc/')) {
        $rootdir = pathinfo($dir);
        //doc_list.php cotntains layout
        //      include("doc_list.php");
        //}
        echo "Rootdir: <a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>".$rootdir['dirname']."</a><br>";
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
?>
