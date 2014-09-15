
<body style="background:lightgray">
<?php echo "You are <strong>editing </strong>$dir<br><br><form action=$_SERVER[PHP_SELF] method='post'>" ?>
<p><input type="button" class="btn btn-primary btn-sm" value="Print" onclick="PrintElem('#box')" /> | <a id="exportxt" href="#">Save </a> <p>

        <textarea cols=100 rows=30 style='padding:20px' name='newcontent'>
        <?echo file_get_contents($dir, FILE_USE_INCLUDE_PATH);?>

</textarea><br>
          <input type="submit" name="submit" value="Save">
          <input type="hidden" name="file" value=<?'.$dir.'?> >
          <input type="hidden" name="action" value="source">
        </form>


</body>