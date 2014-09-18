<head>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>


<div class="row " >
  <div class="container">
 <div class = "col-lg-12" id ="containerHome" >

<p align="center">
<img src="assets/cmacc-trans.png"  height="100px" />
</p>
   <hr><h1 class="title">Escrow example.</h2>

<?

$path = './';
$dir="Doc/event/escrow/";

$content = file_get_contents($dir, FILE_USE_INCLUDE_PATH);
print "content: $content";

$contents = explode("\n", $content);
$rootdir = pathinfo($dir);
$filenameX = basename($dir);

 include('list.php');

?>

