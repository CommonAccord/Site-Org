<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<body>
  <div class="container" id ="containerHome" style="padding:50px">
    <div class="row">
     <div class = "col-xs-12">

    
	 <p align="center"><img src="assets/cmacc-trans.png" style="width:65%" /></p>
<br/>
<hr>
<h1 class="title">CommonAccord is an open source software<br/> and law project.</h1>
<hr>
<h3 class="title">We are lawyers and programmers working together<br/> to create a global template system of codified legal texts.</h4>
<br/><br/>

<!--
                        <div id="code" class="jtitle">
                         We are <b>{</b>Bringing<b>}</b> legal relationships into the personal data store.<br/>
                        <b>Bringing</b> = Codifying legal documents to bring
                        </div>
!-->
</div></div>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" id="code" align="center">
<a href="<?=$_SERVER['PHP_SELF']?>?action=demo"><img  src="assets/learn.jpg"></a>
</div>

    <div class="col-sm-4" id="info-more">

        <h4 class="subtitle">Explore <a href=<?=$_SERVER['PHP_SELF']?>?action=explore>the template system.</a></h4>
        <h4 class="subtitle">Learn <a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=/about/how/>how it works</a>.</h4>
        <h4 class="subtitle">Browse <a href="https://github.com/CommonAccord/commonaccord/tree/master/Doc">the Github repo</a>.</h4>

                        <br/><a href="#more"><img src="assets/more.png" height=75></a>

</div>
</div>

    </div> <!--end containerHome !-->
     
<div class="row" id="containerContent"> 
     <div class="col-sm-4">
	<div class="aboutBox" >
          <h2 class="title">The Challenge</h2>
          <hr>
   <h4 class="jtitle">To eliminate rehashing and needless inconsistency in law.</h4>
          <hr>
   <p>The legal system runs on text. Nearly all legal text is a copy or rework of something already existing. Our current technologies fail to make these connections.  This creates needless work, cost, delay, risk and legal confusion.</p>
          <br>        
	</div>
    </div> <!--end col-sm-4 !-->

        <div class="col-sm-4">
	<div class=" aboutBox">
          <h2 class="title">A Solution</h2>
          <hr>
         <h4 class="jtitle">The simplest possible programming language</h4>   
<hr>
   <p>We have created a modular template system of text cards that relies on {expansion} of strings and [expansion] of cards.  Period.  People can program their relationships.  Lawyers can codify boilerplate.  Management can have a data picture of the enterprise's relationships, situation and activities.   Smart contracts can be both technical &ldquo;dry&rdquo; code (i.e. self-contained code snippets) and legal &ldquo;wet&rdquo; code.</p>
      <br>
	</div>
        </div><!--end col-sm-4 !-->

        <div class="col-sm-4">
	<div class="aboutBox">
          <h2 class="title">Our vision<hr></h2>
          
               <h4 class="jtitle">Legal boilerplate becomes self-actuating.<hr></h4>

               <p>Lawyers can focus on advocacy and counseling clients.  Citizens and business managers can get to yes quicker and know their situation better with an assurance of a stable legal base upon which to build.  Smart contracts can operate both technically and legally. </p>

          <p>Contract and legal text becomes cards of text, interoperating, in git, shared, forked, tested and improved.</p>
<br>
	</div>
       </div><!--end col-sm-4 !-->
    </div><!--end containerContent !-->
  </div><!--end container !-->


</body><!-- end body !-->
