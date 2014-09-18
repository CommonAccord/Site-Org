<body style="background:lightgray">

<body>
  <div class="container">
    <div class="row">
     <div class = "col-xs-12" id ="containerHome" style="padding:50px">

        <? include('partials/home_page_about.php') ?> <!--grab the links from a partial -->
        <? include('partials/home_page_links.php') ?> <!--grab the links from a partial -->
    <br>

    </div> <!--end containerHome !-->
   </div><!--end row !-->
</div> <!--end container !-->

<br>
      
<div class="container " >
      
     <div class="col-sm-4 aboutBox" id="more" >
          <h2 class="title">The Challenge</h2>
          <hr>
          <h4 class="jtitle">Making "smart contracts" that function both as software and in the real world of courts and laws.</h4>
          <hr>
          <p>In order to be as effective as their traditional counterparts, smart contracts must also be <strong>legally enforceable</strong> in the real world. This requires them to comply with all the standard formalities required for a court to enforce a contract under the law.  But while technology has rapidly advanced to a point where "smart contracts" are not only possible, but are being built, the legal framework for their existence has not been built. </p>
                  

    </div> <!--end col-sm-4 !-->

        <div class="col-sm-4 aboutBox">
          <h2 class="title">A Solution</h2>
          <hr>
         <h4 class="jtitle"> Make contract documents sufficiently 'modular' that much of the text disappears</h4>   
<hr>
              <p>We are building  a modular template system which, after having been fed with specific parameters, can be rendered into both technical ‘dry’ code (i.e. self-contained code snippets) and legal ‘wet’ code (i.e. specific contractual provisions translating the code snippets into legalese) whose overall structure can be established directly through the CommonAccord template system.</p>

          <p> Ideally, this would allow for the dynamic creation of sophisticated and highly customized smart-contracts, which are automatically rendered into a legal document enforceable between the parties. 
</p>  
      <br>

        </div><!--end col-sm-4 !-->

        <div class="col-sm-4 aboutBox">
          <h2 class="title">Our vision<hr></h2>
          
               <h4 class="jtitle">The phrase "legal boilerplate" disappears from our vocabulary.<hr></h4>

               <p>  Lawyers can focus on practicing law and counseling clients, and not recreating or dickering over repetetive and formulaic code snippers.  Developers can focus on developing and building smart contracts with an assurance of a stable legal code base upon which to draw. </p>

          <p>Our vision?  Allow lawyers to create contract language in a git like framework, where code can be shared, forked, tested and improved.  Allow developers access to a stable legal-code base that can be implemented in next-generation smart contract developments.By codifying contract elements, parties will be able to focus on the important components of particular transactions, and not get lost in boilerplate that they usually don't understand anyway. </p>

       </div><!--end col-sm-4 !-->
        
    </div><!--end col-sm-4 !-->
  </div><!--end containerContent !-->
</body><!-- end body !-->

<?php include("footer.php"); ?>
