
<body style='font-size: 200%; padding:5px; margin:10px'>
<?
echo "<a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a><br><br><br>
<b>$filenameX</b>   (<a href=$_SERVER[PHP_SELF]?action=edit&file=$dir>Edit</a>):  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; <a href=$_SERVER[PHP_SELF]?action=render&file=$dir><b>Show the Document</b></a><br><br>
";
?>
<table class='table-responsive ';>
<table class='table table-bordered table-condensed table-striped ';>
</body>