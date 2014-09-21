<?php
	$file = $_REQUEST['file'];
        echo `perl tree-parse.pl $file 2&>1`;
?>
