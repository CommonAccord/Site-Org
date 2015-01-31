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
<h1 class="title">A Center for Decentralized Law</h1>
<hr>
  <h3 class="title">Many decisions that are now taken far away, with limited information, can be taken locally if the participants have access to the precedents they need.<br>Lawyers can focus their effort on substantive issues.<br>We are lawyers and programmers working together to foster a global template system of legal texts.</h4>
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
   <p>The legal system runs on text. Nearly all legal text is a copy or rework of something already existing. Our current technologies fail to make these connections.  This creates needless work, cost, delay, risk and legal confusion.</p><p>Lawyers must focus on boiler plate, instead of focusing on advocacy and counseling clients. Citizens and business managers spend too much time reading complex legal document, without actually ever getting to a proper level of legal certainty, because the lack the assurance of a stable legal document base to build upon.</p>
          <br>        
	</div>
    </div> <!--end col-sm-4 !-->

        <div class="col-sm-4">
	<div class=" aboutBox">
          <h2 class="title">A Solution</h2>
          <hr>
         <h4 class="jtitle">A simple data model for the creation of a digital Law Commons</h4>   
<hr>
   <p>We have created a modular template system of text cards that relies on {expansion} of strings and [expansion] of cards.  Period.  People can program their relationships.  Lawyers can codify boilerplate.  Management can have a data picture of the enterprise's relationships, situation and activities.   Smart contracts can be both technical &ldquo;dry&rdquo; code (i.e. self-contained code snippets) and legal &ldquo;wet&rdquo; code.</p>With Common Accord, contract and legal text becomes cards of text, interoperating, in git, shared, forked, tested and improved.</p>
      <br>
	</div>
        </div><!--end col-sm-4 !-->

        <div class="col-sm-4">
	<div class="aboutBox">
          <h2 class="title">Our vision<hr></h2>
          
               <h4 class="jtitle">Smart contracts and self-actuating code.<hr></h4>

		<p>Smart contracts eliminate the need for trust amongst the parties, who can be sure that the contract will be performed exactly as agreed.  Indeed, as opposed to traditional legal contracts, smart contracts are always and necessarily deterministic - i.e. all possible outcomes of the contract (including penalties for breach of contract) must be explicitly stipulated in advance.</p>
<p>While smart contracts are increasingly able to handle complex deal logics, many kinds of transactions do - eventually - have to interface with the real world. <a href="PDFs/Cmacc-LegallyenabledCrypto-Transacting.pdf">Discover how Common Accord can help.</a></p>

<br>
	</div>
       </div><!--end col-sm-4 !-->
    </div><!--end containerContent !-->
  </div><!--end container !-->


</body><!-- end body !-->