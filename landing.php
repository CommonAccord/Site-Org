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
<h1 class="title">Decentralized Law</h1>
<hr>
  <h3 class="title">A legal system for the 21st Century</h4>
<br/><br/>

</div></div>
<table><tr><td valign=top>
<a href="<?=$_SERVER['PHP_SELF']?>?action=demo"><img  src="assets/learn.jpg"></a>
</td><td valign=top>       <h4 class="subtitle"><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=/>The Documents</a>.</h4>
 <h4 class="subtitle"><a href="https://docs.google.com/presentation/d/1goOc9sv1XXI-uuxRK0W406XCKahVkJP41WmO2pAiu2s/edit?usp=sharing">Center for Decentralized Law</a>.</h4>

        <h4 class="subtitle"><a href="https://www.linkedin.com/pulse/law-code-marc-dangeard">Experience at Be-Bound</a>.</h4>

        <h4 class="subtitle"><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=/about/Agt/>how it works</a>.</h4>
        <h4 class="subtitle"><a href="http://news.slashdot.org/story/13/07/25/1814255/attorney-jim-hazard-is-working-to-open-source-law-video">The Slashdot interview.</a></h4>
        
  </td><td valign=top> &emsp; 
</td><td valign=top align=right width=40%>
<a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096">Tweets by @CommonAccord</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</td></tr></table>
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