
<body style="background:lightgray">

<h4>You are <strong>editing </strong> <? echo $dir ?><br>
	<br />
<!-- <br><form action= "<?  $_SERVER['PHP_SELF'] ?>" method="post"></h4> -->

<p><input type="button" class="btn btn-primary btn-sm" value="Print" onclick="PrintElem('#box')" /> | <a input type="button" id="#exportxt" href="#">Save </a></p>
 <div >  
 <div id="exportxt">    
<pre>	
    <div contenteditable="true" id="box"style="color:white; background:black; padding:10px"> 
       <? echo file_get_contents($dir, FILE_USE_INCLUDE_PATH);?>

</div>
</pre>
</div>
</div>

         
</body>

<?php include("footer.php"); ?>
